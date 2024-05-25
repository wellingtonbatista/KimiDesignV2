<?php

namespace App\Livewire\Transportadoras;

use App\Models\Transportadoras;
use Livewire\Component;

class CreateTransportadora extends Component
{
    public $transportadora = '';
    
    public $nome = '';
    public $cnpj = '';
    public $representante = '';
    public $contato = '';

    public function render()
    {
        return view('livewire.transportadoras.create-transportadora');
    }

    public function mount($transportadora = null){
        $this->transportadora = Transportadoras::find($transportadora);

        if($transportadora != null){
            $this->nome = $this->transportadora->nome;
            $this->cnpj = $this->transportadora->cnpj;
            $this->representante = $this->transportadora->representante;
            $this->contato = $this->transportadora->contato;
        }
    }

    public function save(){

        if($this->transportadora == null){
            $validate = $this->validate([
                'nome' => 'required',
                'cnpj' => 'min:18|max:18',
                'representante' => 'min:3|max:255',
                'contato' => 'min:16|max:16',
            ]);
    
            Transportadoras::create($validate);
    
            session()->flash('mensagem_create');
    
            $this->nome = '';
            $this->cnpj = '';
            $this->representante = '';
            $this->contato = '';
        } else {
            $validate = $this->validate([
                'nome' => 'required',
                'cnpj' => 'min:18|max:18',
                'representante' => 'min:3|max:255',
                'contato' => 'min:16|max:16',
            ]);
    
            Transportadoras::find($this->transportadora->id)->update($validate);
    
            session()->flash('mensagem_update');

            return $this->redirect('/transportadoras/'.$this->transportadora->id, navigate: true);
        }
    }
}
