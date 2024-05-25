<div class="static pb-20">
    <div class="border rounded-md">
        <form wire:submit="save">
            <div class="grid grid-cols-8 py-8">
                <div class="grid col-span-8 px-6 md:col-span-4">
                    <div class="mt-2 px-4 pr-80">
                        <h1 class="font-bold text-xl">Nome da Transportadora <span class="text-red-600">*</span> </h1>
                        <p class="mt-2">Preencha com o nome da transportadora a ser cadastrada!</p>
                        @error('nome')
                            <p class="mt-4 text-red-600 font-bold">*Campo Obrigatorio!</p>
                        @enderror
                    </div>
                </div>
                <div class="grid col-span-8 bg-white px-8 py-8 rounded mx-8 md:col-span-4 md:mt-0 mt-6 border">
                    <label for="nome" class="font-bold text-sm mb-1">Nome da Transportadora</label>
                    <input type="text" name="nome" class="bg-gray-50 rounded" wire:model="nome">
                </div>
            </div>
            <hr class="mx-6 my-4">
            <div class="grid grid-cols-8 py-8">
                <div class="grid col-span-8 px-6 md:col-span-4">
                    <div class="mt-2 px-4 pr-80">
                        <h1 class="font-bold text-xl">CNPJ da Transportadora</h1>
                        <p class="mt-2">Preencha com o CNPJ da transportadora a ser cadastrada!</p>
                        @error('cnpj')
                            <p class="mt-4 text-red-600 font-bold">*O campo deve ter 14 caracteres!</p>
                        @enderror
                    </div>
                </div>
                <div class="grid col-span-8 md:col-span-4 border bg-white px-8 py-8 rounded mx-8 mt-6 md:mt-0">
                    <label for="cnpj" class="font-bold text-sm mb-1">CNPJ da Transportadora</label>
                    <input type="text" name="cnpj" placeholder="00.000.000/0000-00" class="bg-gray-50 rounded" wire:model="cnpj" x-mask="99.999.999/9999-99">
                </div>
            </div>
            <hr class="mx-6 my-4">
            <div class="grid grid-cols-8 py-8">
                <div class="grid col-span-8 px-6 md:col-span-4">
                    <div class="mt-1 px-4 pr-80">
                        <h1 class="font-bold text-xl">Nome do Representante</h1>
                        <p class="mt-2">Preencha com o nome do representante da transportadora a ser cadastrada!</p>
                        @error('representante')
                            <p class="mt-4 text-red-600 font-bold">*O Campo deve ter no minimo 3 caracteres!</p>
                        @enderror
                    </div>
                </div>
                <div class="grid col-span-8 border bg-white px-8 py-8 rounded mx-8 md:col-span-4 mt-6 md:mt-0">
                    <label for="representante" class="font-bold mb-1 text-sm">Nome do Representante</label>
                    <input type="text" name="representante" class="bg-gray-50 rounded" wire:model="representante">
                </div>
            </div>
            <hr class="mx-6 my-4">
            <div class="grid grid-cols-8 py-8">
                <div class="grid col-span-8 px-6 md:col-span-4">
                    <div class="mt-2 px-4 pr-80">
                        <h1 class="font-bold text-xl">Contato</h1>
                        <p class="mt-2">Preencha com o contato do representante da transportadora a ser cadastrada!</p>
                        @error('contato')
                            <p class="mt-4 text-red-600 font-bold">*O campo deve ter 11 caracteres!</p>
                        @enderror
                    </div>
                </div>
                <div class="grid col-span-8 border bg-white px-8 py-8 rounded mx-8 md:col-span-4 mt-6 md:mt-0">
                    <label for="contato" class="mb-1 font-bold text-sm">Contato do Representante</label>
                    <input type="text" name="contato" placeholder="(00) 0 0000-0000" class="bg-gray-50 rounded" wire:model="contato" x-mask="(99) 9 9999-9999">
                </div>
            </div>
            <div class="py-6 px-14 border-t mt-6">
                <button class="border border-green-600 text-green-600 hover:bg-green-600 hover:text-white rounded w-full py-2 duration-200">Cadastrar</button>
            </div>
        </form>
    </div>
    <div class="absolute right-5 border">
        @session('mensagem_create')
            <div class="p-2 border border-green-600 text-green-600 rounded px-8">
                <h1>Transportadora cadastrada com sucesso!</h1>
            </div>
        @endsession
        @session('mensagem_update')
            <div class="p-2 border border-green-600 text-green-600 rounded px-8">
                <h1>Transportadora atualizada com sucesso!</h1>
            </div>
        @endsession
    </div>
</div>
