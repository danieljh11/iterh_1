<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorariosController extends Controller
{
    
    public function index(){
        $horarios = Horario::all();

        return view('horario.index',compact('horarios'));
    }

    public function store(Request $request){
        $horarios  = new Horario();

        $horarios ->id= $request->id;
        $horarios ->id_empleado= $request->id_empleado;
        $horarios ->materia= $request->materia;
        $horarios ->actividades= $request->actividades;
        $horarios ->t_horas= $request->t_horas;
        $horarios ->lunes= $request->lunes;
        $horarios ->martes= $request->martes;
        $horarios ->miercoles= $request->miercoles;
        $horarios ->jueves= $request->jueves;
        $horarios ->viernes= $request->viernes;
        $horarios ->sabado= $request->sabado;
        

        $horarios->save();
        return redirect()->route('horario.index');
    }

    public function update(Request $request,$id){
        $horarios = Horario::find($id);

        $horarios->update($request->all());
        
        return redirect()->route('horario.index');
    }

    public function edit($id){
        $horarios = Horario::find($id);
        return view('horario.edit',compact('horario'));
    }

    public function destroy($id){
        $horarios = Horario::find($id);

        $horarios->delete();

        return redirect()->route('horario.index');

    }



}
