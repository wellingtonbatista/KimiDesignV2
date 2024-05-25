<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carregamento extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'transportadora_id'];
    protected $table = 'carregamentos';

    public function transportadora(){
        return $this->belongsTo(Transportadoras::class);
    }

    public function nf_carregadas(){
        return $this->hasOne(NfCarregadas::class);
    }
}
