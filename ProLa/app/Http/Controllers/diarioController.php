<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\requests\validadorFormRecuerdos;


class diarioController extends Controller
{
    
    

    public function metodoRecuerdos(){

        return view ('recuerdos');

    }



    public function guardarRecuerdo(validadorFormRecuerdos $req){

        return redirect('/formulario')->with('confirmacion', 'tu recuerdo llego al controlador');

    }
}


/*
        $validated = $req->validate([
            'txtTitulo' => 'required|unique:posts|max:25',
            'txtRecuerdo' => 'required|min:4',
        ]);


        


         echo "<p>";

            echo $req->ip();
            echo " - ";
            echo $req->path();
            echo " - ";
            echo $req->method();
            echo " - ";
            echo $req->input('txtTitulo');

        echo "</p>"; 
*/