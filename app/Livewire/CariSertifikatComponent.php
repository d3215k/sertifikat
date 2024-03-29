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
            $this->reset();
            return $this->dispatch('open-modal', id: 'no-data');
        }

        if ($sertifikat) {
            return $this->redirect(route('tampilkan.sertifikat', ['nomor' => $sertifikat->nomor]), navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.cari-sertifikat-component');
    }
}
