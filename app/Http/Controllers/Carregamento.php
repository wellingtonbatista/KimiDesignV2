<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Carregamento extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('carregamentos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carregamentos.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('carregamentos.show', [
            'carregamento' => $id
        ]);
    }
}
