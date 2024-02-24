@extends('layouts.plantilla')
@section('titulo', 'recuerdos')
@section('contenido')



<h1 class = "display-1 text-center text-danger"> RECUERDOS </h1>

    <div class= "container w-75 mt-5 mb-3 "> 
       
        @foreach($consR as $item)
        
            <div class="card text-center ">
                

                <div class="card-body padding-2">
                    <h2 class="card-title fw-bold"> {{$item->titulo}} </h2>
                    <h2 class="card-title fw-medium"> {{$item->fecha}}: </h2>
                    <p class="card-text fw-lighter"> {{$item->recuerdo}} </p>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{$item->id}}" >
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrar{{$item->id}}" >
                        Borrar
                    </button>
                </div>
            </div><br>
            @include('partials.modal')
        @endforeach

    </div> 

@include('partials.pagination')
@endsection

   