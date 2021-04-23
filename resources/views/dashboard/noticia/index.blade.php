@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Adminitración</h1>
@stop

@section('content')
    <a href="noticias/create" class="btn btn-primary mb-3">CREAR</a>
    <hr>

    <table id="noticias" class="table table-dark table-bordered table-striped shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Foto</th>
                <th scope="col">Título</th>
                <th scope="col">Extracto</th>
                <th scope="col">Fecha de Publicacion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
                <tr>
                    <!-- <td>{{$noticia->id}}</td> -->
                    <td class="col-md-2">
                        
                            @foreach($noticia->fotos as $foto)
                            <form action="{{route('fotos.destory', $foto)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <div class="col-md-4">
                                    <button class="btn btn-danger btn-sm" style="position:absolute"><i class="fa fa-remove">x</i></button>
                                    <img class="card-img-top img-responsive" src="{{url($foto->url)}}" alt="">
                                </div>
                            </form>
                            @endforeach         
                         
                    </td>
                    <td>{{$noticia->titulo}}</td>
                    <td>{{$noticia->extracto}}</td>
                    <td>{{$noticia->fecha_publicacion->format('d M y')}}</td>
                    <td>
                        <form action="{{route('noticias.destroy', $noticia->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/noticias/{{$noticia->url}}/edit" class="btn btn-info">Editar</a>
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
            $('#noticias').DataTable({
                "lengthMenu": [[5,10,-1], [5,10,50,"All"]]
            });
        } );
    </script>
@stop