@extends('layouts.app')

@section('title','Trabajador')

@section('content')
@csrf 


    <div class=" h-16 flex justify-center py-4 px-16">
        <div x-data="{ show: false }">
          
                <button @click={show=true} type="button" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
                font-semibold mx-2 hover:bg-blue-600">Nuevo Empleado</Button>
        
            <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                    <div class="bg-white rounded shadow-lg border overflow-hidden">
                        <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                        <div class="px-6 py-3 text-xl border-b font-bold">Insertar datos de Empleado</div>
                        <div class="bg-white w-full  p-4 border-gray-100 shadow-xl rounded-lg">
                            <form action="{{ route('empleados.store') }}" method="POST" class="">
                                @csrf 
                                <input  class="my-2 w-full bg-gray-200  p-2 text-lg rounded placeholder-gray-900"
                                placeholder="Numero de Empleado" name="id">
                          
                                <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="Nombre" name="nombre">
                          
                                <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="Apellido paterno" name="appat">
                          
                                <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="Apellido Materno" name="apmat">
                          
                                <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="Fecha de nacimiento: DD-MM-AAAA" name="fechanac">
                          
                                <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="CURP" name="curp">
                          
                                <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="RFC" name="rfc">
                          
                                <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="INE" name="ine">
                          
                                <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="Correo" name="correo">
                          
                                <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                placeholder="Telefono" name="telefono">
                          
                                <div class="">
                                   <select class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                   placeholder="Tipo de Empleado" name="tipoemple">
                                       <option>---Seleccione Tipo de Empleado--</option>
                                       <option>Docente</option>
                                       <option>Director</option>
                                       <option>Jefe de Departamento</option>
                                       <option>otro</option>
                                   </select>
                                   <div class="pointer-events-none ...">
                                       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
                                   </div>
                               </div>
                                <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Enviar</button>
                             </form>
                        </div>
                        <div class="px-6 py-3 border-t">
                            <div class="flex justify-end">
                                <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
            </div>
        </div>
        <a href="{{ route('direccions.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
        font-semibold mx-2 hover:bg-blue-600">Direccion</a>
        <a href="{{ route('bancarios.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
        font-semibold mx-2 hover:bg-blue-600">Datos Bancarios</a>
    </div>

 <div class="max-w-10xl mx-auto sm:px-4 lg:px-1">

      <div class="bg-white mx-auto overflow-hidden shadow-xl sm:rounded-lg w-max ">

        <table class="table-fixed w-max">
            <thead>
            <tr class="bg-indigo-500 text-white w-max">
                <th class="w-20 py-4 px-4  ...">ID</th>
                <th class="w-20   py-5 px-4...">Nombre</th>
                <th class="w-20   py-5 px-4...">Apellido 1</th>
                <th class="w-20  py-4 px-4...">Apellido 2</th>
                <th class="w-10   py-4 px-4...">Fecha de  nacimiento</th>
                <th class="w-1/8  py-4 px-4...">Curp</th>
                <th class="w-1/8  py-4 px-4...">RFC</th>
                <th class="w-1/8  py-4 px-4...">INE</th>
                <th class="w-1/8   py-4 px-4...">Correo</th>
                <th class="w-1/8  py-4 px-4...">Telefono</th>
                <th class="w-10  py-5 px-4..."> Tipo de empleado</th>
               
                <th class="w-28 py-4 ...">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($empleado as $row)
                    
                    <tr>
                        <td class="py-3 px-6">{{$row->id}}</td>
                        <td class="p-3">{{$row->nombre}}</td>
                        <td class="p-3">{{$row->appat}}</td>
                        <td class="p-3">{{$row->apmat}}</td>
                        <td class="p-3">{{$row->fechanac}}</td>
                        <td class="p-3">{{$row->curp}}</td>
                        <td class="p-3">{{$row->rfc}}</td>
                        <td class="p-3">{{$row->ine}}</td>
                        <td class="p-3">{{$row->correo}}</td>
                        <td class="p-3">{{$row->telefono}}</td>
                        <td class="p-3">{{$row->tipoemple}}</td>
                        <td class="p-3 flex justify-center">

                        <form action="{{route('empleados.destroy',$row->id)}}" method="POST">
                            @csrf 
                            @method('delete')
                            <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                            <i class="fas fa-trash"></i></button>
                        </form>

                        <a href="{{route('empleados.edit',$row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                        <i class="fas fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
 </div>
@endsection