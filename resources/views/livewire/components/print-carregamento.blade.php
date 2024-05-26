<div class="border mt-4 p-4 border-black">
    <div class="mb-4">
        <div class="border rounded">
            <div class="grid grid-cols-3">
                <div class="grid col-span-1">
                    <h1 class="font-bold p-2 text-start text-green-600">#{{ $carregamento->id }}</h1>
                </div>
                <div class="grid col-span-1">
                    <h1 class="font-bold p-2 text-green-600">{{ $carregamento->transportadora->nome }}</h1>
                </div>
                <div class="grid col-span-1">
                    <h2 class="font-bold p-2 text-green-600">{{ date('d/m/Y H:m') }}</h2>
                </div>
            </div>
        </div>
    </div>
    <table class="border w-full table-auto border-gray-100">
        <thead class="text-center border-b">
            <tr>
                <th class="p-1 px-2 font-bold text-sm">Id</th>
                <th class="p-1 px-2 font-bold text-sm">Status</th>
                <td class="p-1 px-2 font-bold text-sm">Nome</td>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($nf_carregadas as $nf)
                <tr>
                    <td class="py-1 font-bold text-sm">{{ $nf->id }}</td>
                    <td class="py-1 font-bold text-sm">{{ $nf->numero_nf }}</td>
                    <td class="py-1 font-bold px-4 text-sm">{{ $nf->chave_nf }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="grid grid-cols-2 mt-20">
        <div class="col-span-1 pe-2">
            <label class="text-sm font-bold">Nome:</label>
            <input type="text" class="w-full">
        </div>
        <div class="col-span-1 ps-2">
            <label class="text-sm font-bold">Documento:</label>
            <input type="text" class="w-full">
        </div>
    </div>
    <script>
        window.print()
    </script>
</div>

