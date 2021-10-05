@extends('layouts.app')

@section('title','Checador de Asistencia')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

<h1 class="text-xl text-center font-bold ">Ingrese su Numero de Empleado</h1>

<form class="mt-4" method="" action="">
   @csrf 

   <div href="">{{ date('Y-m-d H:i:s') }}</div>

   <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
   text-lg placeholder-gray-900 p-2 my-2 focus:bg-whithe" placeholder="Numero de Empleado"
   id="noempleado" name="noempleado">

   <button  class="rounded-md bg-blue-800 w-full text-lg
   text-white font-semibold p-2 my-3 hover:bg-blue-900">Checar</button>

</form>

</div>

@endsection