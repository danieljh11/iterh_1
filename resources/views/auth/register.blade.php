@extends('layouts.app')

@section('title','Register')

@section('content')
   <h1>Register </h1>
   <div class="block mx-auto my-12 p-8 bg-white w-1/3 border borer-gray-200
   rounded-lg shadow-lg">

   <h1 class="text-3xl text-center font-bold ">Register</h1>

   <form class="mt-4" method="POST" action="">
      @csrf 
     <input type="text" class="border border-gray-100 rounded-md bg-gray-200 w-full
      text-lg placeholder-gray-900 p-2 my-2 focus:bg-whithe" placeholder="Nombre"
      id="name" name="name">

      @error('name')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">{{$message}}</p>
      @enderror

      <input type="email" class="border border-gray-100 rounded-md bg-gray-200 w-full
      text-lg placeholder-gray-900 p-2 my-2 focus:bg-whithe" placeholder="Email"
      id="email" name="email">

      @error('email')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">{{$message}}</p>
      @enderror

      <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
      text-lg placeholder-gray-900 p-2 my-2 focus:bg-whithe" placeholder="Password"
      id="password" name="password">

      @error('password')
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">{{$message}}</p>
      @enderror

      <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
      text-lg placeholder-gray-900 p-2 my-2 focus:bg-whithe" placeholder="Password confirmation"
      id="password_confir" name="password_confir">

    
      
      <button type="submit" class="rounded-md bg-blue-800 w-full text-lg
      text-white font-semibold p-2 my-3 hover:bg-blue-900">Ingresar</button>

   </form>

   </div>


@endsection