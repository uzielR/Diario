
  <div class="modal fade" id="editar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header bg-danger">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form method="POST" action="/recuerdo/{{$item->id}}/confirm">
                @csrf 
                {!! method_field('PUT') !!}
                <div class="mb-3 fs-3 text-center">
                    <label class="form-label "> Titulo </label>
                    <input type="text" name="txtTitulo"  class="form-control" value="{{$item->titulo}}">
                        <div class="mb-3 fs-5 fw-bold text-center text-danger" >
                        {{ $errors->first('txtTitulo')}}
                        </div>
                </div>

                <div class="mb-3 fs-3  text-center" >
                    <label class="form-label  "> Recuerdo </label>
                    <input type="text" name="txtRecuerdo"  class="form-control" value="{{$item->recuerdo}}" >
                        <div class="mb-3 fs-5 fw-bold text-center text-danger" >
                        {{ $errors->first('txtRecuerdo')}}
                        </div>
                </div>
                
            </div>

            <div class="modal-footer  text-body-secondary fs-5 fw-medium text-primary text-center ">
                    <div class = "d-grid gap-2">
                        <button type="submit" class="btn btn-danger fs-5 " href="/recuerdos" >Editar recuerdo</button>
                    </div>
            
            </div>
          </form>
       

      </div>
    </div>
  </div>




  
  <div class="modal fade" id="borrar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header bg-danger">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Regresar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form method="POST" action="/recuerdo/{{$item->id}}/confirme"> 
                @csrf 
                {!! method_field('PUT') !!}
                <div class="mb-3 fs-3 text-center text-danger">
                    <label class="form-label "> ¿Seguro que deceas borrar el recuerdo? </label>
                </div>
            </div>

            <div class="modal-footer fs-5 fw-medium text-primary text-center ">
                    <div class = "d-grid gap-2">
                      <button type="submit" class="btn text-center btn-danger" href="/recuerdos" >Eliminar</button>
                    </div>
            </div>
          </form>
       

      </div>
    </div>
  </div>