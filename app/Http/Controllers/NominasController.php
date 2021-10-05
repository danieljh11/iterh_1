<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nomina;

class NominasController extends Controller
{
    public function index(){
        $nominas = Nomina::all();

        return view('nominas.index',compact('nominas'));
    }

    public function store(Request $request){
        $nominas  = new Nomina();

        $nominas ->id= $request->id;
        $nominas ->periodo= $request->periodo;
        $nominas ->actividades= $request->actividades;
        $nominas ->departamento= $request->departamento;
        $nominas ->folio= $request->folio;
        $nominas ->t_horas= $request->t_horas;
    

        $nominas->save();
        return redirect()->route('nominas.index');
    }

    public function update(Request $request,$id){
        $nominas = Nomina::find($id);

        $nominas->update($request->all());
        
        return redirect()->route('nominas.index');
    }

    public function edit($id){
        $nominas = Nomina::find($id);
        return view('nominas.edit',compact('nominas'));
    }

    public function destroy($id){
        $nominas = Nomina::find($id);

        $nominas->delete();

        return redirect()->route('nominas.index');

    }
}
