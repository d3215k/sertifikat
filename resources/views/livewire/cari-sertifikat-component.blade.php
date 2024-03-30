<div class="container mx-auto">
    <div class="mt-32">
        <form wire:submit="handleSearch" class="flex flex-col items-center">
            <div class="mx-auto">
                <img class="size-28" src="{{ asset('images/certificate.png') }}" />
            </div>
            <div class="mt-4 mx-2">
                <p class="text-gray-600 text-center">
                    Masukan Nomor sertifikat untuk memeriksa keaslian sertifikat
                </p>

                <x-filament::input.wrapper class="max-w-lg mx-auto mt-12">
                    <x-filament::input
                        type="text"
                        autofocus
                        wire:model="nomor"
                        {{-- wire:keydown.enter="handle" --}}
                        style="font-size: 1.8rem"
                        class="font-bold disabled:bg-gray-200"
                    />

                    <x-slot name="prefix">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-500 dark:text-gray-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                        </div>
                    </x-slot>
                </x-filament::input.wrapper>

                <div wire:loading wire:target="handleSearch" class="flex justify-center text-primary-600 py-4">
                    <span>Verifying...</span>
                </div>
            </div>
        </form>
    </div>

    <x-filament::modal id="no-data"
        icon="heroicon-o-x-circle"
        icon-color="danger"
        alignment="center"
    >
        <x-slot name="heading">
            <span>Whoops!</span>
        </x-slot>

        <div class="text-center">Sertifikat dengan nomor <span class="font-semibold">{{ $nomor }}</span> tidak ditemukan.</div>

    </x-filament::modal>

</div>
