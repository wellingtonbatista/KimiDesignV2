<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-8">
            <div class="col-span-6 p-2">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Carregamento') }}
                </h2>
            </div>
            <div class="col-span-2">
                <a href="{{ route('carregamentos.index') }}" wire:navigate>
                    <div class="p-2 border text-center text-red-600 border-red-600 rounded-md hover:bg-red-600 hover:text-white duration-200">
                        Voltar
                    </div>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="mt-10">
        <livewire:carregamentos.show-carregamento carregamento='{{$carregamento}}' />
    </div>

</x-app-layout>