<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //Método encargado de mostrar la pág principal
    public function index(){

        $cursos = Curso::orderBy('id', 'DESC')->paginate();

        // return $cursos;
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create') ;

    }

    //validamos en el Store curso
    public function store(StoreCurso $request){

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso){

        // $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        // $curso = Curso::find($id);

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        //Validación 
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso->id);

    }
}
