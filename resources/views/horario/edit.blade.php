@extends('layouts.app')

@section('title','Editar Horario')

@section('content')

<form action="{{ route('horario.update',$horarios->id) }}" method="POST" class="">
    @csrf 
    <input  class="my-2 w-full bg-gray-200  p-2 text-lg rounded placeholder-gray-900"
    placeholder="Numero de Materia" name="id_horario" value="{{$horarios->id}}">

    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Numero de Empleado" name="id_empleado" value="{{$horarios->id_empleado}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Materia" name="materia" value="{{$horarios->materia}}" >

    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Actividades" name="actividades" value="{{$horarios->actividades}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Total de Horas" name="t_horas" value="{{$horarios->t_horas}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Lunes" name="lunes" value="{{$horarios->lunes}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Martes" name="martes" value="{{$horarios->martes}}">

    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Miercoles" name="miercoles" value="{{$horarios->miercoles}}">

    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Jueves" name="jueves" value="{{$horarios->jueves}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Viernes" name="viernes" value="{{$horarios->viernes}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Sabado" name="sabado" value="{{$horarios->sabado}}">

    
    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Enviar</button>
 </form>




@endsection