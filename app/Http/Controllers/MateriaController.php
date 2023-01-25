<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index(){
        return view('Materia.index');

    }
    public function create(){

        return view('Materia.create');
    }
    public function show($materia){

         //otra manera de mandar a llamar en este caso materia tine que tener el mismi nombre
        return view('Materia.show', compact('materia'));

       // return view('alumnos.show', ['materias'=>$materia]);
    }
}
