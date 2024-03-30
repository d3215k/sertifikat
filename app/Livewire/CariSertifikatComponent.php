<?php

namespace App\Livewire;

use App\Models\Sertifikat;
use Livewire\Component;

class CariSertifikatComponent extends Component
{
    public $nomor;

    public function handleSearch()
    {
        $sertifikat = Sertifikat::where('nomor', $this->nomor)->first();

        if (!$sertifikat) {
            return $this->dispatch('open-modal', id: 'no-data');
        }

        $this->redirectRoute('tampilkan.sertifikat', ['nomor' => $sertifikat->nomor], navigate: true);
    }

    public function render()
    {
        return view('livewire.cari-sertifikat-component');
    }
}
