<?php

namespace App\Livewire\Carregamentos;

use Livewire\Component;
use App\Models\Carregamento;
use App\Models\NfCarregadas;
use Illuminate\Validation\Rules\Exists;

use function PHPUnit\Framework\isEmpty;

class ShowCarregamento extends Component
{
    public $carregamento = '';

    public $transportadora_id = '';
    public $carregamento_id = '';
    public $numero_nf = '';
    public $chave_nf = '';

    public function render()
    {
        $nf_carregadas = new NfCarregadas();

        return view('livewire.carregamentos.show-carregamento', [
            'nf_carregadas' => $nf_carregadas->where('carregamento_id', $this->carregamento->id)->get()
        ]);
    }

    public function rules(){
        return [
            'chave_nf' => 'required|min:44|max:44|unique:nf_carregadas,chave_nf'
        ];
    }

    public function messages(){

        $nf = NfCarregadas::WhereIn('chave_nf', [$this->chave_nf])->get();

        if($nf->first() != null){
            $nf_testada = $nf->first()->carregamento_id;
        } else {
            $nf_testada = '';
        }

        return [
            'required' => 'O campo deve ser preenchido!',
            'min' => 'O campo deve ter 44 caracteres!',
            'max' => 'O campo deve ter 44 caracteres!',
            'unique' => 'Nota ja existente no carregamento N:'.$nf_testada
        ];
    }

    public function mount($carregamento = null){
        $this->carregamento = Carregamento::find($carregamento);
    }

    public function save(){

        $this->validate();

        $this->transportadora_id = $this->carregamento->transportadora_id;
        $this->carregamento_id = $this->carregamento->id;

        $numero_nf_total = substr($this->chave_nf, '-19', '-10');
        $this->numero_nf = str_replace('0' , '', $numero_nf_total);

        NfCarregadas::create($this->only([
            'transportadora_id',
            'carregamento_id',
            'numero_nf',
            'chave_nf'
        ]));

        $this->chave_nf = '';
    }

    public function delete($id){
        NfCarregadas::find($id)->delete();
    }
}
