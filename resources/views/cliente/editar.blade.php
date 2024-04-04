<!-- MODAL DE EDITAR UN ARCHIVO -->
<div class="modal fade" id="editar{{$clientes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">

              <h3 class="modal-title" id="exampleModalLabel">Editar el registro de {{$clientes->nombre}}</h3>
              <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                  <i class="fa fa-times" aria-hidden="true"></i></button>
          </div>
          <div class="modal-body">

              <form action="{{route('cliente.update', $clientes->id)}}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                  <div class="row">
                      <div class="col-sm-6">
                          <div class="mb-3">
                              <label for="nombre" class="form-label">Nombre</label>
                              <input type="text" id="nombre" name="nombre" class="form-control" value="{{$clientes->nombre}}" required>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" id="apellido" name="apellido" class="form-control" value="{{$clientes->apellido}}" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                      <div class="mb-3">
                          <label for="telefono" class="form-label">Telefono</label>
                          <input type="text" id="telefono" name="telefono" class="form-control" value="{{$clientes->telefono}}" required>
                      </div>
                  </div>
              </div>

              <div class="row">
                <div class="col-sm-3">
                    <div class="mb-2">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" id="correo" name="correo" class="form-control" value="{{$clientes->correo}}" required>
                    </div>
                </div>
            </div>

                  <input type="hidden" name="accion" value="editar">
                  <input type="hidden" name="id" value="{{$clientes->id}}">
                  <br>

                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  </div>

          </div>

          </form>
      </div>
  </div>
</div>