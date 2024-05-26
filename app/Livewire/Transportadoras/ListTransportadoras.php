<?php

namespace App\Livewire\Transportadoras;

use Livewire\Component;
use App\Models\Transportadoras;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ListTransportadoras extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $id_transportadora;
    public $nome_transportadora;

    public function render()
    {
        $transportadora = Transportadoras::query()->when($this->id_transportadora, function($query){
            $query->where('id', $this->id_transportadora);
        })->when($this->nome_transportadora, function($query){
            $query->where('nome', 'LIKE', '%'.$this->nome_transportadora.'%');
        })->paginate(5);

        return view('livewire.transportadoras.list-transportadoras', [
            'transportadoras' => $transportadora
        ]);
    }

    public function delete($id){
        Transportadoras::find($id)->delete();
    }

    public function CleanFilter(){
        $this->id_transportadora = '';
        $this->nome_transportadora = '';
    }
}
