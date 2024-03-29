<?php

namespace App\Livewire;

use App\Models\Sertifikat;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TampilkanSertifikatComponent extends Component
{
    public ?Sertifikat $sertifikat;

    public function mount($nomor)
    {
        $sertifikat = Sertifikat::where('nomor', $nomor)->firstOrFail();
        $this->sertifikat = $sertifikat;
    }

    public function download()
    {
        $qrcode = base64_encode(QrCode::format('svg')->size(150)->errorCorrection('H')->generate(config('app.url').'/c/'.$this->sertifikat->nomor));
        $pdf = Pdf::loadView('pdf.sertifikat', [
            'sertifikat' => $this->sertifikat,
            'qrcode' => $qrcode
        ])->output();
        return response()->streamDownload(
            fn() => print($pdf),
            'sertifikat-'.$this->sertifikat->nomor.'.pdf'
        );
    }

    public function render()
    {
        return view('livewire.tampilkan-sertifikat-component');
    }
}
