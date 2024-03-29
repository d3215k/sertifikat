<div class="container mx-auto py-12">
    <div class="text-center">
        <h1 class="font-bold text-2xl">Sertifikat Digital</h1>
        <p class="mt-2">
            Sertifikat ini adalah dokumen resmi dan valid diterbitkan oleh SMK Plus Al-Farhan untuk {{ $sertifikat->pemilik->nama }}
        </p>
    </div>
    <div class="overflow-x-auto mx-6 md:mx-0 mt-6">
        <div class="relative text-gray-600 bg-gray-100 mx-auto w-[900px] min-h-[550px] p-12">
            <h2 class="text-success-600 font-bold text-3xl mt-12">Sertifikat Uji Kompetensi</h2>
            <p class="">Nomor : {{ $sertifikat->nomor }}</p>
            <p class="mt-6">Dengan ini menyatakan bahwa,</p>
            <p class="font-semibold text-black text-2xl uppercase">{{ $sertifikat->pemilik->nama }}</p>

            <p class="mt-6">Telah mengikuti Uji Kompetensi Keahlian pada Kompetensi Keahlian</p>
            <p class="font-semibold text-xl text-black">{{ $sertifikat->kompetensi->nama }}</p>
            <p class="mt-12">Sukabumi, {{ $sertifikat->tanggal_terbit }}</p>
            <p>Kepala SMK Plus Al-Farhan</p>

            <p class="mt-24 font-semibold text-black">Agus Syarif Hikmatulloh, S.Sos</p>
            <div class="absolute bottom-[50px] right-[50px] flex flex-col items-end">
                <div class="bg-white p-2 flex-none">
                    {!! QrCode::size(100)->generate(config('app.url').'/c/'.$sertifikat->nomor ); !!}
                </div>
                <p class="mt-4">Sertifikat ini berlaku untuk : 3 (tiga) tahun</p>
            </div>
        </div>
    </div>
    <div class="mt-6 flex justify-center">
        <x-filament::button wire:click="download">
            Download
        </x-filament::button>
    </div>
</div>
