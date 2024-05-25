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

            <div class="grid col-span-1 px-4">
                <label class="font-bold pb-0.5" for="id_carregamento">ID Carregamento:</label>
                <input type="number" name="" id="id_carregamento" class="w-full" wire:model.live="id_carregamento">
            </div>

            <div class="grid col-span-1 px-4">
                <label class="font-bold pb-0.5" for="id_carregamento">Nota Fiscal:</label>
                <input type="number" name="" id="id_carregamento" class="w-full" wire:model.live="numero_nf">
            </div>
            
            <div class="grid col-span-1 px-4">
                <label class="font-bold pb-0.5" for="status">Status:</label>
                <select wire:model.live="status" id="status">
                    <option value="" selected>Todos</option>
                    <option value="aberto">Aberto</option>
                    <option value="fechado">Fechado</option>
                </select>
            </div>

            <div class="grid col-span-1 px-4">
                <label class="font-bold pb-0.5" for="transportadora">Transportadora:</label>
                <select wire:model.live="id_transportadora" id="transportadora">
                    <option value="">Seleione uma opcao</option>
                    @foreach ($transportadoras as $transportadora)
                        <option value="{{ $transportadora->id }}">{{ $transportadora->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid col-span-1 px-4">
                <label class="font-bold pb-0.5" for="data_inicial">Data Inicial:</label>
                <input type="date" wire:model.live="data_inicial" id="data_inicial">
            </div>

            <div class="grid col-span-1 px-4">
                <label class="font-bold pb-0.5" for="data_final">Data Final:</label>
                <input type="date" wire:model.live="data_final" id="data_final">
            </div>

        </div>

    </div>
    <table class="border w-full bg-gray-50 table-auto">
        <thead class="text-center border-b">
            <tr>
                <th class="p-2 font-bold">Id</th>
                <th class="p-2 font-bold">Status</th>
                <td class="p-2 font-bold">Nome</td>
                <td class="p-2 font-bold">Data</td>
                <td class="p-2 font-bold">Detalhes</td>
                <td class="p-2 font-bold">Apagar</td>
                <td class="p-2 font-bold">Status</td>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($carregamentos as $carregamento)
                <tr>
                    <td class="py-3 font-bold">{{ $carregamento->id }}</td>
                    <td class="py-3 font-bold">{{ $carregamento->status }}</td>
                    <td>{{ $carregamento->transportadora->nome }}</td>
                    <td>{{ date('d/m/Y', strtotime($carregamento->created_at)) }}</td>

                    <td class="font-bold">
                        <a href="{{ route('carregamentos.show', ['carregamento' => $carregamento->id]) }}" wire:navigate {{ $carregamento->status == 'aberto' ? '' : 'hidden' }}>
                            <button class="border py-0.5 px-2 rounded border-yellow-400 text-yellow-400 hover:text-white hover:bg-yellow-400 duration-200">
                                <i class="bi bi-list-nested"></i>
                            </button>
                        </a>
                    </td>

                    <td class="py-3">
                        <button {{ $carregamento->status == 'fechado' ? 'disabled' : '' }} class="border py-0.5 px-2 rounded text-red-600 border-red-600 hover:bg-red-600 hover:text-white duration-200" wire:click="delete({{$carregamento->id}})">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </td>

                    <td>
                        <button class="border px-2 py-0.5 rounded border-blue-700 text-blue-700 hover:text-white hover:bg-blue-700 duration-200" wire:click="{{ $carregamento->status == 'aberto' ? 'close' : 'open' }}({{$carregamento->id}})">
                            <i class="{{ $carregamento->status == 'aberto' ? 'bi bi-check2-all' : 'bi bi-arrow-left' }}"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-6">
        {{ $carregamentos->links() }}
    </div>
</div>
