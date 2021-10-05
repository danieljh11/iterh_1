@extends('layouts.app')

@section('title','Datos Bancaarios')

@section('content')
@csrf 
        <div class=" h-16 flex justify-center py-4 px-16">
            <div x-data="{ show: false }">
            
                    <button @click={show=true} type="button" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
                    font-semibold mx-2 hover:bg-blue-600">Nuevo dato Bancario</Button>
            
                <div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
                    <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
                        <div class="bg-white rounded shadow-lg border overflow-hidden">
                            <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
                            <div class="px-6 py-3 text-xl border-b font-bold">Insertar Datos de Bancarios</div>
                            <div class="bg-white w-full  p-4 border-gray-100 shadow-xl rounded-lg">
                                

                                <form action="{{ route('bancarios.store') }}" method="POST" class="">
                                    @csrf 
                                    <input  class="my-2 w-full bg-gray-200  p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Numero de Empleado" name="id">

                                    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Banco" name="nombre_banco">

                                    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Clave Interbancaria" name="clave_bancaria">

                                    <input  class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Numero de Cuenta" name="nocuenta">

                                    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
                                    placeholder="Sucursal" name="sucursal">
                                    
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
            <a href="{{ route('empleados.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
            font-semibold mx-2 hover:bg-blue-600">Empleados</a>
            <a href="{{ route('direccions.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 
            font-semibold mx-2 hover:bg-blue-600">Direccion</a>
        </div>




        <div class="max-w-10xl mx-auto sm:px-4 lg:px-1">

            <div class="bg-white mx-auto overflow-hidden shadow-xl sm:rounded-lg w-max ">

            <table class="table-fixed w-max">
                <thead>
                <tr class="bg-blue-600 text-white w-max">
                    <th class="w-20 py-4 px-4  ...">Numero de Empleado</th>
                    <th class="w-20 py-4 px-4...">Banco</th>
                    <th class="w-20 py-4 px-4...">Clave Interbancaria</th>
                    <th class="w-20 py-4 px-4...">Cuenta</th>
                    <th class="w-1/8 py-4 px-4...">Sucursal</th>
                    <th class="w-28 py-4 ...">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($bancarios as $row)
                        
                        <tr>
                            <td class="py-3 px-6">{{$row->id}}</td>
                            <td class="p-3">{{$row->nombre_banco}}</td>
                            <td class="p-3">{{$row->clave_bancaria}}</td>
                            <td class="p-3">{{$row->nocuenta}}</td>
                            <td class="p-3">{{$row->sucursal}}</td>
                            <td class="p-3 flex justify-center">

                            <form action="{{route('bancarios.destroy',$row->id)}}" method="POST">
                                @csrf 
                                @method('delete')
                                <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                                <i class="fas fa-trash"></i></button>
                            </form>

                            <a href="{{route('bancarios.edit',$row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                            <i class="fas fa-pen"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>

@endsection




