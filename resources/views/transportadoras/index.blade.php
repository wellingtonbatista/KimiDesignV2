<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-8">
            <div class="col-span-6 inline-block p-2">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Transportadoras') }}
                </h2>
            </div>
            <div class="col-span-2 inline-block justify-end border text-center p-2 border-green-700 rounded-md text-green-700 hover:bg-green-700 hover:text-white duration-200 text-xs md:text-base">
                <a class="font-bold" href="{{route('transportadoras.create')}}" wire:navigate>Criar Transportadora
                </a>
            </div>
        </div>
        
        
    </x-slot>

    <div class="mt-10">
        <livewire:transportadoras.list-transportadoras />
    </div>
    
</x-app-layout>