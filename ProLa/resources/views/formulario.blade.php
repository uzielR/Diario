
@extends('layouts.plantilla')

@section('titulo', 'formulario')

@section('contenido')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<h1 class = "display-1 text-center text-danger"> FORMULARIO </h1>

    <div class= "container mt-5 col-md-6"> 
        <script>
            @if (session('confirmacion'))
                Swal.fire({
                    icon: 'confirmacion',
                    title: '¡Éxito!',
                    text: '{{ session('confirmacion') }}',
                });
            @endif
        </script>
       
                
        
        <div class= "card" >
            
            <div class="card-header fs-2 fw-medium text-light text-center bg-danger">
            Mete tus memorias
            </div>
            

                <div class="card-body" >
                    <form method="POST" action ="/recuerdos">

                            @csrf 

                            <div class="mb-3 fs-3 text-center">
                                <label class="form-label "> Titulo </label>
                                <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}">
                                    <div class="mb-3 fs-5 fw-bold text-center text-danger" >
                                    {{ $errors->first('txtTitulo')}}
                                    </div>
                            </div>

                            <div class="mb-3 fs-3  text-center" >
                                <label class="form-label  "> Recuerdo </label>
                                <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo') }}" >
                                    <div class="mb-3 fs-5 fw-bold text-center text-danger" >
                                    {{ $errors->first('txtRecuerdo')}}
                                    </div>
                            </div>
                            
                        </div>

                            <div class="card-footer  bg-danger text-body-secondary fs-5 fw-medium text-primary text-center ">
                                <div class = "d-grid gap-2">
                                    <button type="submit" class="btn btn-danger fs-5 " >Guardar recuerdo</button>
                                </div>

                    </form>
                </div>
        
        </div>

    </div> 

@endsection

   