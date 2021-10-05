<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChecadorsController extends Controller
{
    public function index(){

        return view('asistencias.index');
   }

}
