<div x-data="{ show: false}">
    <div class="grid grid-cols-1 my-4 justify-items-end">
        <div class="grid col-span-1">
            <label class="inline-flex items-center cursor-pointer">
                <span class="pe-4 font-bold">Atualizar Cadastro</span>
                <input type="checkbox" value="" class="sr-only peer" checked x-model="show">
                <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            </label>
        </div>
    </div>
    <div class="border p-3 rounded">
        <div class="grid grid-cols-12">
            <div class="grid col-span-1">
                <h1 class="font-bold text-md md:text-xl p-4 text-center">#{{ $transportadora->id }}</h1>
            </div>
            <div class="grid col-span-6">
                <h1 class="font-bold text-md p-4 px-8 md:text-xl">{{ $transportadora->nome }}</h1>
            </div>
            <div class="grid col-span-12 md:col-span-5">
                <h2 class="font-bold text-md p-4 md:text-end mr-10 md:text-xl">{{ $transportadora->cnpj }}</h2>
            </div>
        </div>
        <hr>
        <div class="grid grid-cols-8 mt-5">
            <div class="grid col-span-2 md:col-span-4">
                <h1 class="text-xl font-bold p-4 px-8">{{ $transportadora->representante }}</h1>
            </div>
            <div class="grid col-span-6 md:col-span-4">
                <h2 class="font-bold text-xl p-4 text-end mr-10">{{ $transportadora->contato }}</h2>
            </div>
        </div>
    </div>
    <div x-show="show" class="mt-10" x-transition.opacity.duration.300ms>
        <livewire:transportadoras.create-transportadora transportadora='{{ $transportadora->id }}'/>
    </div>
</div>
