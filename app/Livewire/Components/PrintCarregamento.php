<?php

namespace App\Livewire\Components;

use App\Models\Carregamento;
use App\Models\NfCarregadas;
use Livewire\Component;

class PrintCarregamento extends Component
{
    public $carregamento;

    public function render()
    {
        $nf_carregadas = NfCarregadas::where('carregamento_id', $this->carregamento->id)->get();

        return view('livewire.components.print-carregamento', [
            'nf_carregadas' => $nf_carregadas,
            'carregamento' => $this->carregamento
        ]);
    }

    public function mount($id = null){
        $this->carregamento = Carregamento::find($id);
    }
}
