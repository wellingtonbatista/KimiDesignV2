<div>
    <form wire:submit="save">
        <div class="border p-10 bg-white">
            <div class="grid grid-cols-1">
                <div class="grid col-span-1">
                    <input type="text" name="chave_nf" wire:model="chave_nf" class="w-full rounded border-green-500" placeholder="Chave Nota Fiscal">
                </div>
                <div class="grid mt-16 col-span-1">
                    <button class="border py-2 font-bold border-green-600 rounded text-green-600 hover:text-white hover:bg-green-600 duration-200" type="submit">Cadastrar</button>
                </div>
                @error('chave_nf')
                    <span class="mt-4 text-red-600">{{$errors->first('chave_nf')}}</span>
                @enderror
            </div>
        </div>
    </form>

    <div class="mt-5">
        <table class="border w-full bg-gray-50 table-auto">
            <thead class="text-center border-b">
                <tr>
                    <th class="p-2 font-bold">Nf</th>
                    <th class="p-2 font-bold">Chave</th>
                    <th class="p-2 font-bold">Remover</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($nf_carregadas as $nf )
                    <tr>
                        <td class="py-2">{{ $nf->numero_nf }}</td>
                        <td class="py-2">{{ $nf->chave_nf }}</td>
                        <td class="py-2"><button class="border px-2 py-0.5 text-red-600 border-red-600 rounded-md hover:bg-red-600 hover:text-white duration-200" wire:click="delete({{$nf->id}})"><i class="bi bi-trash3"></i></button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
