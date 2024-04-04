<!-- MODAL DE ELIMINAR UN ARCHIVO -->
<div class="modal fade" id="delete{{$clientes->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-white text-black">
                <h3 class="modal-title" id="exampleModalLabel">Confirmar Eliminación</h3>
                <button type="button" class="btn btn-black" data-bs-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="{{route('cliente.destroy', $clientes->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')

                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="alert alert-danger">
                                <p>¿Desea eliminar el registro de {{$clientes->nombre}}<b></b>?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <form action="" method="post">
                            <input type="hidden" name="accion" value="eliminar">
                            <input type="hidden" name="id" value="">

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


