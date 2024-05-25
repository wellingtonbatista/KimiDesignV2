<?php

namespace App\Livewire\Carregamentos;

use Livewire\Component;
use App\Models\Carregamento;
use App\Models\NfCarregadas;
use App\Models\Transportadoras;
use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListCarregamentos extends Component
{

    use WithPagination, WithoutUrlPagination;

    public $id_transportadora;
    public $status;
    public $data_inicial;
    public $data_final;
    public $id_carregamento;
    public $numero_nf;

    public function render()
    {
        $carregamentos = Carregamento::query()->when($this->id_transportadora, function($query){
            $query->where('transportadora_id', $this->id_transportadora);
        })->when($this->status, function($query){
            $query->where('status', $this->status);
        })->when($this->data_inicial, function($query){
            $query->where('created_at', '>=', $this->data_inicial);
        })->when($this->data_final, function($query){
            $query->where('created_at', '<=', $this->data_final);
        })->when($this->id_carregamento, function($query){
            $query->where('id', $this->id_carregamento ?? '');
        })->when($this->numero_nf, function($query){
            $nf = new NfCarregadas();
            $nf_buscada = $nf->where('numero_nf', $this->numero_nf)->first();

            $query->where('id', $nf_buscada->carregamento_id ?? '');
        })->orderBy('id', 'desc')->paginate(5);

        return view('livewire.carregamentos.list-carregamentos', [
            'carregamentos' => $carregamentos,
            'transportadoras' => Transportadoras::all()
        ]);
    }

    public function delete($id){
        $nf_carregadas = new NfCarregadas();

        $nf_carregadas->where('carregamento_id', $id)->delete();

        Carregamento::find($id)->delete();
    }

    public function close($id){
        Carregamento::find($id)->update([
            'status' => 'fechado'
        ]);
    }

    public function open($id){
        Carregamento::find($id)->update([
            'status' => 'aberto'
        ]);
    }

    public function CleanFilter(){
        $this->id_transportadora = '';
        $this->status = '';
        $this->data_final = '';
        $this->data_inicial = '';
        $this->id_carregamento = '';
        $this->numero_nf = '';
    }
}
