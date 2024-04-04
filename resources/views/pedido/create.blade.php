<!-- MODAL DE AGREGAR UN NUEVO ARCHIVO -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar registro del Pedido</h3>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="{{route('pedido.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
            <div>
                
                <div class="row">
                    <div class="col-sm-6">
                      <div class="mb-3">
                        <label for="cliente_id" class="form-label">Cliente</label>
                        <select name="cliente_id" id="cliente_id" class="form-control">
                          @foreach($clientes as $clientes)
                            <option value="{{$clientes->id}}"> {{$clientes->nombre}} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="platillo" class="form-label"> Platillo</label>
                                <input type="text" id="platillo" name="platillo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea id="descripcion" name="descripcion" class="form-control" rows="3" max-height="50" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="mesero" class="form-label"> Mesero </label>
                                <input type="text" id="mesero" name="mesero" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
