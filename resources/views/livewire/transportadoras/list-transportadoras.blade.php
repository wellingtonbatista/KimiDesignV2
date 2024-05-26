<div>
    <div class="border mb-5 bg-white p-4 pb-10 pt-6">
        <div class="grid grid-cols-2 mx-4">
            <div class="grid col-span 1">
                <h1 class="font-bold text-xl"><i class="bi bi-funnel pe-2"></i>Filtros</h1>
            </div>
            <div class="grid col-span-1 justify-items-end">
                <div>
                    <button class="border mx-auto py-0.5 px-6 rounded text-yellow-500 border-yellow-500 hover:bg-yellow-500 hover:text-white duration-200" wire:click="CleanFilter"><i class="bi bi-x-lg pe-2"></i>Limpar</button>
                </div>
            </div>
        </div>
        <hr class="mt-4 mb-8 mx-4">
        <div class="grid grid-cols-6">

            <div class="grid col-span-6 px-4 mt-4 sm:col-span-1 sm:mt-0">
                <label class="font-bold pb-0.5" for="id_carregamento">ID Transportadora:</label>
                <input type="number" name="" id="id_carregamento" class="w-full" wire:model.live="id_transportadora">
            </div>

            <div class="grid col-span-6 px-4 mt-4 sm:col-span-5 sm:mt-0">
                <label class="font-bold pb-0.5" for="id_carregamento">Nome Transportadora:</label>
                <input type="text" name="" id="id_carregamento" class="w-full" wire:model.live="nome_transportadora">
            </div>

        </div>
    </div>    
    <div>
        <table class="border w-full bg-gray-50 table-auto">
            <thead class="text-center border-b">
                <tr>
                    <th class="p-2 font-bold">Id</th>
                    <td class="p-2 font-bold">Nome</td>
                    <td class="p-2 font-bold">Detalhes</td>
                    <td class="p-2 font-bold">Apagar</td>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($transportadoras as $transportadora)
                    <tr>
                        <td class="py-3">{{ $transportadora->id }}</td>
                        <td>{{ $transportadora->nome }}</td>
                        <td class="font-bold"><a href="{{ route('transportadoras.show', ['transportadora' => $transportadora->id]) }}" wire:navigate><button class="border py-0.5 px-2 rounded border-yellow-400 text-yellow-400 hover:text-white hover:bg-yellow-400 duration-200"><i class="bi bi-list-nested"></i></button></a></td>
                        <td class="py-3"><button class="border py-0.5 px-2 rounded text-red-600 border-red-600 hover:bg-red-600 hover:text-white duration-200" wire:click="delete({{$transportadora->id}})"><i class="bi bi-trash3"></i></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-6">
            {{ $transportadoras->links() }}
        </div>
    </div>
</div>
