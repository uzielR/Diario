<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerCrudD;


Route::controller(diarioController::class)->group(function(){
    /* route::get('formulario', 'metodoFormulario')->name('apodoFormulario'); */
    route::get('recuerdos', 'metodoRecuerdos')->name('apodorRecuerdos');
});

Route::get('/recuerdo/create', [ControllerCrudD::class,'create'])->name('recuerdo.create');

Route::post('/recuerdos',[ControllerCrudD::class,'store'])->name('recuerdo.store');
Route::get('/recuerdos', [ControllerCrudD::class,'index'])->name('recuerdo.index');

Route::get('/',[ControllerCrudD::class,'inicio'])->name('recuerdo.welcome');

Route::put('/recuerdo/{id}/confirm',[ControllerCrudD::class,'update'])->name('recuerdo.update');
Route::put('/recuerdo/{id}/confirme', [controllerCrudD::class,'destroy'])->name('recuerdo.delete');

/* Route::put('/recuerdo/{id}/confirm',[ControllerCrudD::class,''])->name('recuerdo.'); */


//rutas individuales para controlador 
/*
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');

Route::get('formulario', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');

Route::get('recuerdos', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');



*/


/*
Route::get('/', function (){
    return view ('welcome');
});

Route::get('/formulario', function (){
    return view ('formulario');
});

Route::get('/recuerdos', function (){
    return view ('recuerdos');
}); */

/*

Route::view('/', 'welcome')->name('apodoinicio');

Route::view('/formulario', 'formulario')->name('apodoformulario');

Route::view('/recuerdos', 'recuerdos')->name('apodoRecuerdos');

*/