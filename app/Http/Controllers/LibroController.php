<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $libros = auth()->user()->libros;
        $campos = $libros->first()?->getFillable()??[];
        
        return view('libros.index',compact('libros','campos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibroRequest $request)
    {
        //
        $values = $request->input();

        auth()->user()->libros()->create($values);

        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
