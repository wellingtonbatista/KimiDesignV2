<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportadoras extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cnpj', 'representante', 'contato'];
    protected $table = 'transportadoras';
}
