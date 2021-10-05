@extends('layouts.app')

@section('title','Editar Direccion')

@section('content')
   <form action="{{ route('direccions.update',$direccions->id) }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
      @csrf 
      @method('put')
      <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Editar Direccion {{$direccions->id}}</h2>

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Numero de Empleado" name="id" value="{{$direccions->id}}">

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Calle #" name="calle" value="{{$direccions->calle}}">

      <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Colonia" name="colonia" value="{{$direccions->colonia}}">

      <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
      placeholder="Codigo Postal" name="codigop" value="{{$direccions->codigop}}">
      <div class="relative">
            <select class="..." placeholder="Estado" name="estado" value="{{$direccions->estado}}">
                <option>Aguascalientes</option>
                <option>Baja California</option>
                <option>Baja California Sur</option>
                <option>Campeche</option>
                <option>Chiapas</option>
                <option>Chihuahua</option>
                <option>Ciudad de México </option>
                <option>Coahuila</option>
                <option>Colima </option>
                <option>Durango</option>
                <option>Estado de México </option>
                <option>Guanajuato</option>
                <option>Guerrero</option>
                <option>Hidalgo</option>
                <option>Jalisco</option>
                <option>Michoacán</option>
                <option>Morelos</option>
                <option>Nayarit </option>
                <option>Nuevo León</option>
                <option>Oaxaca</option>
                <option>Puebla</option>
                <option>Querétaro</option>
                <option>Quintana Roo</option>
                <option>San Luis Potosí</option>
                <option>Sinaloa</option>
                <option>Sonora</option>
                <option>Tabasco</option>
                <option>Tamaulipas</option>
                <option>Tlaxcala</option>
                <option>Veracruz</option>
                <option>Yucatán</option>
                <option>Zacatecas</option>
            </select>
            <div class="pointer-events-none ...">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
            </div>
        </div>

      
      
      <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Enviar</button>





   </form>
  

@endsection