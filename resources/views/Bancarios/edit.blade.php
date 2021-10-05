@extends('layouts.app')

@section('title','Editar Cuenta Bancaria')

@section('content')
<form action="{{  route('bancarios.update',$bancarios->id)}}" method="POST" class="">
    @csrf
    @method('put')
     <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Editar Cuenta de {{$bancarios->id}}</h2> 
    <input  class="my-2 w-full bg-gray-200  p-2 text-lg rounded placeholder-gray-900"
    placeholder="Numero de Empleado" name="id" value="{{$bancarios->id}}">

    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Banco" name="nombre_banco" value="{{$bancarios->nombre_banco}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Clave Interbancaria" name="clave_bancaria" value="{{$bancarios->clave_bancaria}}">

    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Numero de Cuenta" name="nocuenta" value="{{$bancarios->nocuenta}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Sucursal" name="sucursal" value="{{$bancarios->sucursal}}">
    
    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Enviar</button>
 </form>


@endsection