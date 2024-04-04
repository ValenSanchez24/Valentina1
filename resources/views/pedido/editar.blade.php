<!-- MODAL DE EDITAR UN ARCHIVO -->
<div class="modal fade" id="editar{{$pedidos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-warning text-white">
  
                <h3 class="modal-title" id="exampleModalLabel">Editar el registro de {{ $pedidos->cliente->nombre }}</h3>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
  
                <form action="{{route('pedido.update', $pedidos->id)}}" method="POST"  enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
  
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
                                <label for="platillo" class="form-label">Platillo</label>
                                <input type="text" id="platillo" name="platillo" class="form-control" value="{{$pedidos->platillo}}" required>
                            </div>
                        </div>
                    </div>
  
                    <div class="row">
                      <div class="col-sm-6">
                          <div class="mb-3">
                              <label for="descripcion" class="form-label">Descripción</label>
                              <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$pedidos->descripcion}}" required>
                          </div>
                      </div>
                  </div>
  
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="mesero" class="form-label">Mesero</label>
                            <input type="text" id="mesero" name="mesero" class="form-control" value="{{$pedidos->mesero}}" required>
                        </div>
                    </div>
                </div>
  
                    <input type="hidden" name="accion" value="editar">
                    <input type="hidden" name="id" value="{{$pedidos->id}}">
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