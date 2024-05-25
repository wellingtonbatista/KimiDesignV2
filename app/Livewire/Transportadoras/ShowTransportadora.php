<?php

namespace App\Livewire\Transportadoras;

use Livewire\Component;
use App\Models\Transportadoras;

class ShowTransportadora extends Component
{
    public $transportadora = '';

    public function render()
    {
        return view('livewire.transportadoras.show-transportadora');
    }

    public function mount($transportadora = null){
        $this->transportadora = Transportadoras::find($transportadora);
    }
}
