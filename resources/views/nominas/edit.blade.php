@extends('layouts.app')

@section('title','Editar Nomina')

@section('content')
        <form action="{{ route('nominas.update',$nominas->id) }}" method="POST" class="">
            @csrf 
            @method('put')
            <input  class="my-2 w-full bg-gray-200  p-2 text-lg rounded placeholder-gray-900"
            placeholder="Numero de Materia" name="id" value="{{$nominas->id}}">

            <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
            placeholder="Periodo" name="periodo" value="{{$nominas->periodo}}">

            <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
            placeholder="Actividades" name="actividades" value="{{$nominas->actividades}}" >


            <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
            placeholder="Departamento" name="departamento" value="{{$nominas->departamento}}">

            <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
            placeholder="Folio" name="folio" value="{{$nominas->folio}}">

            <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
            placeholder="Total de Horas" name="t_horas" value="{{$nominas->t_horas}}">
            
            <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Enviar</button>
        </form>
@endsection