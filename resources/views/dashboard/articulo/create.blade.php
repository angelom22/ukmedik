@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Adminitración</h1>
@stop

@section('content')
    <h2>CREAR ARTICULOS</h2>
    <form action="/articulos" method="POST" enctype="multipart/form-data" files="true">
        @csrf
        <div class="mb-3 {{$errors->has('codigo') ? 'has-error' : ''}}">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" class="form-control" name="codigo" id="codigo"  tabindex="1">
            {!! $errors->first('codigo', '<span class="alert-danger">:message</span>') !!}
        </div>
        <div class="mb-3 {{$errors->has('titulo') ? 'has-error' : ''}}">
            <label for="titulo" class="form-label">título</label>
            <input type="text" class="form-control" name="titulo" id="titulo"  tabindex="2">
            {!! $errors->first('titulo', '<span class="alert-danger">:message</span>') !!}
        </div>
        <div class="mb-3 {{$errors->has('subtitulo') ? 'has-error' : ''}}">
            <label for="subtitulo" class="form-label">Subtítulo</label>
            <input type="text" class="form-control" name="subtitulo" id="subtitulo" tabindex="3">
            {!! $errors->first('subtitulo', '<span class="alert-danger">:message</span>') !!}
        </div>
        <div class="mb-3 {{$errors->has('descripcion') ? 'has-error' : ''}}">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion"  tabindex="4">
            {!! $errors->first('descripcion', '<span class="alert-danger">:message</span>') !!}
        </div>
        <div class="mb-3 {{$errors->has('cantidad') ? 'has-error' : ''}}">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad"  tabindex="5">
            {!! $errors->first('cantidad', '<span class="alert-danger">:message</span>') !!}
        </div>
        <div class="mb-3 {{$errors->has('precio') ? 'has-error' : ''}}">
            <label for="precio" class="form-label">Precio</label>
            <input type="number"  class="form-control" name="precio" id="precio" step="any" value="0.00" tabindex="6">
            {!! $errors->first('precio', '<span class="alert-danger">:message</span>') !!}
        </div>
        <div class="mb-3 {{$errors->has('imagen') ? 'has-error' : ''}}">
            <input type="file" id="imagen" name="imagen" value="{{ old('imagen') }}" />
            {!! $errors->first('imagen', '<span class="alert-danger">:message</span>') !!}			
        </div>
        
       
        <a href="/articulos" class="btn btn-secondary" tabindex="7">Canelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Cargar</button>
    

    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop