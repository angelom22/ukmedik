@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Adminitración</h1>
@stop

@section('content')
    <h2>Crear Nueva Noticia</h2>
    <hr>
    <form action="/noticias" method="POST" enctype="multipart/form-data" files="true">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3 {{$errors->has('titulo') ? 'has-error' : ''}}">
                    <label for="titulo" class="form-label">Título de la publicación</label>
                    <input type="text" class="form-control" name="titulo" id="titulo"  tabindex="1" placeholder="Ingresa aqui el título de la publicación" value="{{old('titulo')}}">
                    {!! $errors->first('titulo', '<span class="alert-danger">:message</span>') !!}
                </div>
                <div class="mb-3 {{$errors->has('contenido') ? 'has-error' : ''}}">
                    <label for="contenio" class="form-label">Contenido</label>
                    <textarea   class="form-control" name="contenido" id="contenido" tabindex="3" placeholder="Contenido completo de la publicación">{{old('contenido')}}</textarea>
                    {!! $errors->first('contenido', '<span class="alert-danger">:message</span>') !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3 {{$errors->has('extracto') ? 'has-error' : ''}}">
                    <label for="extracto" class="form-label">Descripción corta</label>
                    <textarea rows="5" class="form-control" name="extracto" id="extracto"  tabindex="2" placeholder="Contenido extracto de la publicación">{{old('extracto')}}</textarea>
                    {!! $errors->first('extracto', '<span class="alert-danger">:message</span>') !!}
                </div>
            
                <div class="mb-3">
                    <label for="fecha_publicacion" class="form-label">Fecha de Publicacion</label>

                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="fecha_publicacion" id="fecha_publicacion" tabindex="4" value="{{old('fecha_publicacion')}}"/>
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                   
                </div>

                <div class="mb-3 {{$errors->has('categoria') ? 'has-error' : ''}}">
                    <label for="categoria">Categoría</label>
                    <select class="form-control select2bs4" name="categoria" id="categoria" tabindex="5">
                        <option value="">Seleccione una categorías</option>
                        @foreach($categorias as $categoria)
                        <option value=" {{$categoria->id }}"
                            {{ old('categoria') == $categoria->id ? 'selected' : '' }} >{{$categoria->nombre}}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('categoria', '<span class="alert-danger">:message</span>') !!}
                </div>
                
                <div class="mb-3 {{$errors->has('etiquetas') ? 'has-error' : ''}}">
                    <label for="etiqueta">Etiquetas</label>
                    <select class="select2bs4" multiple="multiple" data-placeholder="Seleccione una o etiquetas" style="width: 100%;" name="etiquetas[]" id="etiqueta" tabindex="6">
                        @foreach($etiquetas as $etiqueta)
                        <option {{ collect(old('etiquetas'))->contains($etiqueta->id) ? 'selected' : '' }} value="{{$etiqueta->id}}">{{$etiqueta->nombre}}</option>
                        @endforeach  
                    </select>
                </div>
                
                {!! $errors->first('etiquetas', '<span class="alert-danger">:message</span>') !!}

                <div class="mb-3 {{$errors->has('foto') ? 'has-error' : ''}}">
					<input type="file" id="foto" name="foto" value="{{ old('foto') }}" />
                    {!! $errors->first('foto', '<span class="alert-danger">:message</span>') !!}								
                </div>
            </div>

        </div>
        
        <a href="/noticias" class="btn btn-secondary" tabindex="5">Canelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Publicar</button>

    </form>
   
@stop

@section('css')
   
    <!-- daterange picker -->
    <link rel="stylesheet" href="/css/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/css/summernote-bs4.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="/css/select2/css/select2.css">
    <link rel="stylesheet" href="/css/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DropZone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
@stop

@section('js')
    <!-- <script src="/js/jquery/jquery.min.js"></script> -->
    <!-- date-range-picker -->
    <script src="/js/daterangepicker.js"></script>
    
    <!-- Summernote -->
    <script src="/js/summernote-bs4.min.js"></script>
    
    <!-- Select2 -->
    <script src="/js/select2/js/select2.full.js"></script>

    <!-- DropZone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

    <script>

$(function () {
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

});

    // Summernote
    $('#contenido').summernote({
        placeholder: 'Redactar contenido',
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    // Dropzone
    // new Dropzone('.dropzone', {
    //     url:'/noticias/{noticia}/fotos',
    //     headers:{
    //         // 'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
    //         'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //     },
    //     dictDefaultMessage: 'Arrastre las fotos aqui para subirlas'
    // });
    
    // Dropzone.autoDiscover = false;

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4',
      tags: true

    });

    


    
    </script>

@stop