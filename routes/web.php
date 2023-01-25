<?php

use App\Http\Controllers\alumnoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', alumnoController::class);

Route::get('/', HomeController::class);

Route::get('Alumno', [alumnoController::class, 'index']);
Route::get('Alumno/create',[alumnoController::class,'create']);
Route::get('Alumno/show/{materia}',[alumnoController::class,'show']);

Route::get('Materia', [MateriaController::class, 'index']);
Route::get('Materia/create',[MateriaController::class,'create']);
Route::get('Materia/show/{nombre}',[MateriaController::class,'show']);




/*
Route::get('Materia', function(){
    return "Bienvenidos a esta materia";
});
Route::get('materias/{Materia}/{semestre}', function($materia, $semestre){
    return "Bienvenidos a la materia de: $materia
    bienvenidos de: $semestre";
});


*/



Route::get('Estudiante', function(){
    return "Bienvendos a semestre";
});

Route::get('Estudiante/{materia}/{semestre}', function($materia, $semestre){
    return "Bienvenidos al semestre de: $materia
    Bienvenidos a la materia de: $semestre";

});



Route::get('Materias/Industrial', function(){
    return "Bienvenidos materia de: Insdustrial";
});

Route::get('Materias/{nombre}/{semestre?}', function($nombre,$semestre=null){
    if($semestre){
    return "Bienvenido a la materia de: $nombre y el semestre: $semestre";
    }
    else{
        return "Bienvenidos a la materia $nombre";
    }
    });



