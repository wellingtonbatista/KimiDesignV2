<?php

namespace App\Livewire\Transportadoras;

use Livewire\Component;
use App\Models\Transportadoras;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ListTransportadoras extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        return view('livewire.transportadoras.list-transportadoras', [
            'transportadoras' => Transportadoras::paginate(5)
        ]);
    }

    public function delete($id){
        Transportadoras::find($id)->delete();
    }
}
