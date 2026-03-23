<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $query = Auth::user()->libros();

        if($request->filled('search')){
            $titulo = $request->search;
            $query->where('titulo', 'LIKE','%'.$titulo.'%');
        };

        if($request->filled('genre')){
            $genero = $request->genre;
            $query->where('genero','LIKE','%'.$genero.'%');
        }

        if($request->filled('author')){
            $autor = $request->author;
            $query->where('autor','LIKE','%'.$autor.'%');
        }

        $libros = $query->paginate(6)->withQueryString();

        /* $libros = Auth::user()->libros()->paginate(6);
        $campos = $libros->first()?->getFillable()??[];
         */
        
        return view('libros.index',compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibroRequest $request)
    {
        //
        $values = $request->input();

        Auth::user()->libros()->create($values);

        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
        return view('libros.show',compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
        return view('libros.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        //
        $libro->update($request->input());
        return redirect()->route('libros.index')
        ->with('success','Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
        $libro->delete();
        return redirect()->route('libros.index')->with('success', 'Libro borrado correctamente.');
    }

    public function exportarCSV(){

        $nombreArchivo = 'lista-libros.csv';

        $cabeceras = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$nombreArchivo\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        return response() ->stream(function(){

            $handle = fopen('php://output','w');

            fputcsv($handle,[
                'user_id',
                'titulo',
                'autor',
                'anio',
                'genero',
                'resumen'
            ]);

            Libro::chunk(25,function($libros) use ($handle){
                foreach($libros as $libro){

                    $datos = [
                        isset($libro->user_id)? $libro->user_id : '',
                        isset($libro->titulo)? $libro->titulo : '',
                        isset($libro->autor)? $libro->autor : '',
                        isset($libro->genero)? $libro->genero : '',
                        isset($libro->resumen)? $libro->resumen : '',
                    ];

                    fputcsv($handle, $datos);
                }
            });

            fclose($handle);
        }, 200, $cabeceras);
    }
}
