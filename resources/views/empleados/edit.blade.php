@extends('layouts.app')

@section('title','Editar Empleado')

@section('content')
   <form action="{{ route('empleados.update',$empleado->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
      @csrf 
      @method('put')
      <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Editar Empleado {{$empleado->id}}</h2>

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Numero de Empleado" name="id" value="{{$empleado->id}}">

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Nombre" name="nombre" value="{{$empleado->nombre}}">

      <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Apellido paterno" name="appat" value="{{$empleado->appat}}">

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Apellido Materno" name="apmat" value="{{$empleado->apmat}}">

      <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Fecha de nacimiento" name="fechanac" value="{{$empleado->fechanac}}">

      <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="CURP" name="curp" value="{{$empleado->curp}}">

      <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="RFC" name="rfc" value="{{$empleado->rfc}}">

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="INE" name="ine" value="{{$empleado->ine}}">

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Correo" name="correo" value="{{$empleado->correo}}">

      <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Telefono" name="telefono" value="{{$empleado->telefono}}">

      <div class="">
         <select class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
         placeholder="Tipo de Empleado" name="tipoemple" value="{{$empleado->tipoemple}}">
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
  

@endsection