@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Adminitración</h1>
@stop

@section('content')
    <a href="articulos/create" class="btn btn-primary mb-3">CREAR</a>
    <hr>

    <table id="articulos" class="table table-dark table-bordered table-striped shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Imagen</th>
                <th scope="col">Código</th>
                <th scope="col">título</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos as $articulo)
                <tr>
                    <td>{{$articulo->id}}</td>
                    <td>
                        
                        <div class="col-md-4">
                            <button class="btn btn-danger btn-sm" style="position:absolute"><i class="fa fa-remove">x</i></button>
                            <img class="card-img-top img-responsive" src="{{url($articulo->imagen)}}" alt="">
                        </div>
                        
                    </td>
                    <td>{{$articulo->codigo}}</td>
                    <td>{{$articulo->titulo}}</td>
                    <td>{{$articulo->descripcion}}</td>
                    <td>{{$articulo->cantidad}}</td>
                    <td>{{$articulo->precio}}</td>
                    <td>
                        <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                "lengthMenu": [[5,10,-1], [5,10,50,"All"]]
            });
        } );
    </script>
@stop