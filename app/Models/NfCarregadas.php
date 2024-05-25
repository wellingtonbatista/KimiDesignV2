<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NfCarregadas extends Model
{
    use HasFactory;

    protected $table = 'nf_carregadas';
    protected $fillable = ['transportadora_id', 'carregamento_id', 'numero_nf', 'chave_nf'];
}
