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
