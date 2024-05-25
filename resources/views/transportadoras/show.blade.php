<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-8">
            <div class="col-span-6 inline-block p-2">
                <h2 class="font-semibold text-md md:text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Detalhes - '.$transportadora->nome) }}
                </h2>
            </div>
            <div class="col-span-2 inline-block justify-end text-center text-xs md:text-base">
                <a href="{{ route('transportadoras.index') }}" wire:navigate><button class="w-full border rounded py-2 border-red-600 text-red-600 hover:bg-red-600 hover:text-white duration-200">Voltar</button></a>
            </div>
        </div>
    </x-slot>

    <div class="container mx-auto p-10 mt-10 border bg-white rounded">
        <livewire:transportadoras.show-transportadora transportadora="{{ $transportadora->id }}" />
    </div>
    
</x-app-layout>