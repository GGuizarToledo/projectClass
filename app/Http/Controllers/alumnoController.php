<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class alumnoController extends Controller
{

    public function index(){
        return view('alumnos.index');

    }
    public function create(){

        return view('alumnos.create');
    }
    public function show($materia){


         //otra manera de mandar a llamar en este caso materia tine que tener el mismi nombre
        return view('alumnos.show', compact('materia'));

       // return view('alumnos.show', ['materias'=>$materia]);
    }
}
