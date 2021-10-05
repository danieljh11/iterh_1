<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion;

class DireccionController extends Controller
{
   public function index(){
        $direccions = Direccion::all();

        return view('direccions.index', compact('direccions'));
   }

   

   public function store(Request $request){
        $direccions  = new Direccion();

        $direccions ->id= $request->id;
        $direccions ->calle= $request->calle;
        $direccions ->colonia= $request->colonia;
        $direccions ->codigop= $request->codigop;
        $direccions ->estado= $request->estado;
        

        $direccions->save();
        return redirect()->route('direccions.index');
    }

    public function update(Request $request,$id){
        $direccions = Direccion::find($id);

        $direccions->update($request->all());
        
        return redirect()->route('direccions.index');
    }

    public function edit($id){
        $direccions = Direccion::find($id);
        return view('direccions.edit',compact('direccions'));
    }

    public function destroy($id){
        $direccions = Direccion::find($id);

        $direccions->delete();

        return redirect()->route('direccions.index');

    }
}
