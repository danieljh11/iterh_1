<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bancario;

class BancariosController extends Controller
{
            public function index(){
            
                $bancarios = Bancario::all();

                return view('bancarios.index', compact('bancarios'));
        }

        public function store(Request $request){
            $bancarios  = new Bancario();

            $bancarios ->id= $request->id;
            $bancarios ->nombre_banco= $request->nombre_banco;
            $bancarios ->clave_bancaria= $request->clave_bancaria;
            $bancarios ->nocuenta= $request->nocuenta;
            $bancarios ->sucursal= $request->sucursal;
            

            $bancarios->save();
            return redirect()->route('bancarios.index');
        }
        public function update(Request $request,$id){
            $bancarios = Bancario::find($id);
    
            $bancarios->update($request->all());
            
            return redirect()->route('bancarios.index');
        }
    
        public function edit($id){
            $bancarios = Bancario::find($id);
            return view('bancarios.edit',compact('bancarios'));
        }
    
        public function destroy($id){
            $bancarios = Bancario::find($id);
    
            $bancarios->delete();
    
            return redirect()->route('bancarios.index');
    
        }




}
