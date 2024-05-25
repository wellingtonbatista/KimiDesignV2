<div class="static">
    <form wire:submit="save">
        <div class="border rounded p-4 ps-6 py-5 pb-8">
            <div class="grid grid-cols-8">
                <div class="grid col-span-8 md:col-span-4 mt-4 border-e py-8 px-4">
                    <h1 class="font-bold text-2xl">Nome Transportadora <span class="text-red-600">*</span> </h1>
                    <p class="pt-1">Selecione a transportadora desejada para iniciar o carregamento</p>
                </div>
                <div class="grid col-span-8 md:col-span-4 px-8 mt-8 py-8">
                    <select name="transportadora" class="h-10 bg-gray-100 rounded-md" wire:model="transportadora_id">
                        <option value="" selected>Selecione Uma Opcao</option>
                        @foreach ($transportadoras as $transportadora)
                            <option value="{{$transportadora->id}}">{{ $transportadora->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-14 text-center px-4">
                <button class="font-bold border rounded-md border-green-600 text-green-600 hover:bg-green-600 hover:text-white duration-200 w-full py-2">Cadastrar</button>
            </div>
        </div>
    </form>
    <div class="absolute right-10 top-44">
        <x-action-message class="border p-4 px-8 rounded-lg border-green-600 text-green-600 font-bold" on="carregamento-create">
            <h1 class="text-lg">Carregamento criado com sucesso!</h1>
        </x-action-message>
    </div>
    @error('transportadora_id')
        <div class="absolute right-10 top-44">
            <h1 class="border p-4 px-8 rounded-lg border-red-500 text-red-500 font-bold text-lg">Selecione uma transportadora!</h1>
        </div>
    @enderror
</div>
