<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cursos;
class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('estoy en la funcion index');
        $cursos=Cursos::all();
        
        return view('cursos.index')
        ->with('cursos',$cursos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create')
       
        ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Cursos::create($input);
        return Redirect( route('cursos.index') );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cur_id)
    {
        $curso=Cursos::find($cur_id);
     
        return view('cursos.edit')
        ->with('curso',$curso);
    }
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$cur_id)
    {
        $input=$request->all();
       $cursos=Cursos::find($cur_id);
       $cursos->update($input);
       return redirect(route('cursos.index') );
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cur_id)
    {
        $cursos=Cursos::find($cur_id);
       $cursos->delete();
       return redirect(route('cursos.index') );
    }
}
