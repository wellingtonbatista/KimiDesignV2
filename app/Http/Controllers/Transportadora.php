<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportadoras;

class Transportadora extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transportadoras.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transportadoras.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('transportadoras.show', [
            'transportadora' => Transportadoras::find($id)
        ]);
    }
}
