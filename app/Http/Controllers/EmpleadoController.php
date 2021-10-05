<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index(){
        $empleado = Empleado::all();

        return view('empleados.index',compact('empleado'));
    }

   

    public function store(Request $request){
        $empleado = new Empleado();

        $empleado->id= $request->id;
        $empleado->nombre= $request->nombre;
        $empleado->appat= $request->appat;
        $empleado->apmat= $request->apmat;
        $empleado->fechanac= $request->fechanac;
        $empleado->curp= $request->curp;
        $empleado->rfc= $request->rfc;
        $empleado->ine= $request->ine;
        $empleado->correo= $request->correo;
        $empleado->telefono= $request->telefono;
        $empleado->tipoemple= $request->tipoemple;

        $empleado->save();

        return redirect()->route('empleados.index', $empleado->id);
    }
    public function update(Request $request,$id){
        $empleado = Empleado::find($id);

        $empleado->update($request->all());
        
        return redirect()->route('empleados.index');
    }

    public function edit($id){
        $empleado = Empleado::find($id);
        return view('empleados.edit',compact('empleado'));
    }

    public function destroy($id){
        $empleado = Empleado::find($id);

        $empleado->delete();

        return redirect()->route('empleados.index');

    }
}
