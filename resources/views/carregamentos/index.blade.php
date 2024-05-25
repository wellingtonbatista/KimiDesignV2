<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-8">
            <div class="col-span-4 p-2 sm:col-span-6">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Carregamentos') }}
                </h2>
            </div>
            <div class="col-span-4 sm:col-span-2">
                <a href="{{ route('carregamentos.create') }}" wire:navigate>
                    <div class="p-2 border text-center text-green-600 border-green-600 rounded-md hover:bg-green-600 hover:text-white duration-200 text-sm sm:text-base">
                        Novo Carregamento
                    </div>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="mt-10">
        <livewire:carregamentos.list-carregamentos />
    </div>

</x-app-layout>