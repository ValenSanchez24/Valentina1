@extends('main')


@section('content')

   <div class="container">
  <div class="row" style="margin:20px;">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
        <h1 class="text-center text-primary">Lista de Pedidos</h1>

        </div>
        <div class="card-body">
    
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
    Agregar
  </button>
    
          <br/>
          <br/>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover display nowrap " id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Pedido</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Mesero</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedidos)
                                <tr>
                                    <td>{{ $pedidos->id }}</td>
                                    <td>{{ $pedidos->cliente->nombre }}</td>
                                    <td>{{ $pedidos->platillo }}</td>
                                    <td>{{ $pedidos->descripcion }}</td>
                                    <td>{{ $pedidos->mesero }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{$pedidos->id}}" style="border-radius: 70%;">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                
@include('pedido.editar')
                            @endforeach
                        </tbody>
                    </table>
                    

@include('pedido.create')
            </div>
        </div>

@endsection

