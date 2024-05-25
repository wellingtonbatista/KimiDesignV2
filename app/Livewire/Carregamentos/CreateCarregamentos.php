<?php

namespace App\Livewire\Carregamentos;

use Livewire\Component;
use App\Models\Transportadoras;
use App\Models\Carregamento;

class CreateCarregamentos extends Component
{
    public $transportadoras = [];

    public $transportadora_id = '';
    public $status = 'aberto';

    public function render()
    {
        $this->transportadoras = Transportadoras::all();

        return view('livewire.carregamentos.create-carregamentos');
    }

    public function save(){

        $validate = $this->validate([
            'transportadora_id' => 'required',
            'status' => 'required',
        ]);

        Carregamento::create($validate);

        $this->transportadora_id = '';
        $this->dispatch('carregamento-create');
    }
}
