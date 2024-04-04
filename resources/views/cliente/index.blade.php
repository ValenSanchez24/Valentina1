@extends('main')


@section('content')

   <div class="container">
  <div class="row" style="margin:20px;">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
        <h1 class="text-center text-primary">Lista de Clientes</h1>

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
                <div class="container">
            <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Acciones</th>
                </tr>
            </thead>
                <tbody>   
                 @foreach($clientes as $clientes)
                    <tr>                        
                        <td>{{ $clientes->id }}</td>
                        <td>{{ $clientes->nombre }}</td>
                        <td>{{ $clientes->apellido }}</td>
                        <td>{{ $clientes->correo }}</td>
                        <td>{{ $clientes->telefono }}</td>
                    <td>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{$clientes->id}}" style="border-radius: 70%;">
            <i class="fa fa-edit"></i> </button>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$clientes->id}}" style="border-radius: 70%;"> <i class="fa fa-trash"></i> </button>
    </td>
</tr>

@include('cliente.editar')
@include('cliente.destroy')

@endforeach
</tbody>
</table>

@include('cliente.create')
            </div>
        </div>

@endsection

