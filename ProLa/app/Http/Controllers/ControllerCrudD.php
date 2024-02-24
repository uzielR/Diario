<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Requests\validadorFormRecuerdos;


class ControllerCrudD extends Controller
{
    
    public function index()
    {

        $consR= DB::table('tb_recuerdos')->get();
        return view('recuerdos',compact('consR'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //desplegar formulario
        return view('formulario');//el nombre de la vista
    }

    public function inicio(){

        return view ('welcome');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormRecuerdos $request)
    {
        //
        DB::table('tb_recuerdos')->insert([
            "Titulo"=> $request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('/recuerdo/create')->with('confirmacion', 'Tu recuerdo llegó al controlador');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function metodoFormulario(){

        return view ('formulario');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorFormRecuerdos $request, string $id)
    {
        DB::table('tb_recuerdos')->where('id', $id)->update([

            "Titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/recuerdos')->with('confirmacion', 'Tu recuerdo se modifico');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $recuerdo = DB::table('tb_recuerdos')->where('id', $id)->first();
    
        if ($recuerdo) {
            DB::table('tb_recuerdos')->where('id', $id)->delete();
            return redirect('/recuerdos')->with('confirmacionBorro', 'Recuerdo eliminado');
        } else {
            return redirect('/recuerdos')->with('error', 'NO encontrado');
        }
    }
}

