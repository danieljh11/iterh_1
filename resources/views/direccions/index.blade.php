@extends('layouts.app')

@section('title','Direcciones de Empleados')

@section('content')
@csrf 

        <div class=" h-16 flex justify-center py-4 px-16">
            <div x-data="{ show: false }">
            
                    <button @click={show=true} type="button" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
                    font-semibold mx-2 hover:bg-blue-600">Nuevo Direccion</Button>
            
                <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border overflow-hidden">
                            <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                            <div class="px-6 py-3 text-xl border-b font-bold">Insertar Datos de Domicilio</div>
                            <div class="bg-white w-full  p-4 border-gray-100 shadow-xl rounded-lg">
                                <form action="{{route('direccions.store')}}" method="POST" class="">
                                    @csrf 
                                    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Nueva Domicilio</h2>
                                
                                    <input  class="my-2 w-full bg-gray-200  p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Numero de Empleado" name="id" >
                                
                                    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Calle #" name="calle">
                                
                                    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Colonia" name="colonia">
                                
                                    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Codigo Postal" name="codigop">
                                
                                      <div class="">
                                          <select class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-90" placeholder="Estado" name="estado">
                                              <option>---Selecciona Estado---</option>
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
                                    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Registrar</button>
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
            <a href="{{ route('empleados.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
            font-semibold mx-2 hover:bg-blue-600">Empleados</a>
            <a href="{{ route('bancarios.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
            font-semibold mx-2 hover:bg-blue-600">Datos Bancarios</a>
        </div>
    



        <div class="max-w-10xl mx-auto sm:px-4 lg:px-1">

            <div class="bg-white mx-auto overflow-hidden shadow-xl sm:rounded-lg w-max ">

                <table class="table-fixed w-max">
                    <thead>
                    <tr class="bg-indigo-500  text-white w-max">
                    <th class="w-20 py-4 px-4  ...">Numero de Empleado</th>
                    <th class="w-20 py-5 px-4...">Calle #</th>
                    <th class="w-20 py-5 px-4...">colonia</th>
                    <th class="w-20 py-4 px-4...">Codigo Postal</th>
                    <th class="w-10 py-4 px-4...">Estado</th>
                        <th class="w-28 py-4 ...">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($direccions as $row)
                            
                            <tr>
                                <td class="py-3 px-6">{{$row->id}}</td>
                                <td class="p-3">{{$row->calle}}</td>
                                <td class="p-3">{{$row->colonia}}</td>
                                <td class="p-3">{{$row->codigop}}</td>
                                <td class="p-3">{{$row->estado}}</td>
                                <td class="p-3 flex justify-center">

                                <form action="{{route('direccions.destroy',$row->id)}} " method="POST">
                                    @csrf 
                                    @method('delete')
                                    <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                                    <i class="fas fa-trash"></i></button>
                                </form>

                                <a href="{{route('direccions.edit',$row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                <i class="fas fa-pen"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection





