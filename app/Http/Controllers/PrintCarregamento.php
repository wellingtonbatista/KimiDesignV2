<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintCarregamento extends Controller
{
    public function index($id){
        return view('PrintCarregamento', ['id' => $id]);
    }
}
