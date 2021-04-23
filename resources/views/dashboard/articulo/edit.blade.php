@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Adminitración</h1>
@stop

@section('content')
<h2>EDITAR ARTICULOS</h2>
    <form action="/articulos/{{$articulo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" class="form-control" name="codigo" id="codigo"  tabindex="1" value="{{$articulo->codigo}}">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">título</label>
            <input type="text" class="form-control" name="titulo" id="titulo"  tabindex="2" value="{{$articulo->titulo}}">
        </div>
        <div class="mb-3">
            <label for="subtitulo" class="form-label">Subtítulo</label>
            <input type="text" class="form-control" name="subtitulo" id="subtitulo" tabindex="3" value="{{$articulo->subtitulo}}">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion"  tabindex="4" value="{{$articulo->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad"  tabindex="5" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number"  class="form-control" name="precio" id="precio" step="any" value="0.00" tabindex="6" value="{{$articulo->precio}}">
        </div>

        <div class="mb-3 {{$errors->has('imagen') ? 'has-error' : ''}}">
            <input type="file" id="imagen" name="imagen" value="{{ old('imagen') }}" />
            {!! $errors->first('imagen', '<span class="alert-danger">:message</span>') !!}			
        </div>

        <div class="row">
        <div class="col-md-8">
           
            <div class="col-md-4">
                <!-- <button class="btn btn-danger btn-sm" style="position:absolute"><i class="fas fas-remove"></i>x</button> -->
                <img class="card-img-top img-responsive" src="{{url($articulo->imagen)}}" alt="">
            </div>
                    
        </div>  
    </div>
        
       
        <a href="/articulos" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Editar</button>
    

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop