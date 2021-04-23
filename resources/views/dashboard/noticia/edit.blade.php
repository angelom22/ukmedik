@extends('adminlte::page')

@section('title', 'Administración')

@section('content_header')
    <h1>Adminitración</h1>
@stop

@section('content')
    <h2>Editar Noticia</h2>
    <hr>
    <div class="row">
       <div class="col-md-12">
            <form action="/noticias/{{$noticia->id}}" method="POST" enctype="multipart/form-data" files="true">
                @csrf
                @method('PUT')
                <input type = "hidden" name = "_token" value = '{{ csrf_token() }}'>
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3 {{$errors->has('titulo') ? 'has-error' : ''}}">
                            <label for="titulo" class="form-label">Título de la publicación</label>
                            <input type="text" class="form-control" name="titulo" id="titulo"  tabindex="1" placeholder="Ingresa aqui el título de la publicación" value="{{$noticia->titulo}}">
                            {!! $errors->first('titulo', '<span class="alert-danger">:message</span>') !!}
                        </div>
                        <div class="mb-3 {{$errors->has('contenido') ? 'has-error' : ''}}">
                            <label for="contenio" class="form-label">Contenido</label>
                            <textarea   class="form-control" name="contenido" id="contenido" tabindex="3" placeholder="Contenido completo de la publicación">{{old('contenido', $noticia->contenido)}}</textarea>
                            {!! $errors->first('contenido', '<span class="alert-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 {{$errors->has('extracto') ? 'has-error' : ''}}">
                            <label for="extracto" class="form-label">Descripción corta</label>
                            <textarea rows="5" class="form-control" name="extracto" id="extracto"  tabindex="2" placeholder="Contenido extracto de la publicación">{{old('extracto',$noticia->extracto)}}</textarea>
                            {!! $errors->first('extracto', '<span class="alert-danger">:message</span>') !!}
                        </div>
                    
                        <div class="mb-3">
                            <label for="fecha_publicacion" class="form-label">Fecha de Publicacion</label>

                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate" name="fecha_publicacion" id="fecha_publicacion" tabindex="4" value="{{old('fecha_publicacion',$noticia->fecha_publicacion ? $noticia->fecha_publicacion->format('d/m/y') : null )}}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy">
                            <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div> -->
                            
                        </div>

                        <div class="mb-3 {{$errors->has('categoria') ? 'has-error' : ''}}">
                            <label for="categoria">Categoría</label>
                            <select class="form-control select2bs4" name="categoria" id="categoria" tabindex="5">
                                <!-- <option value="{{$noticia->categoria->id}}">{{$noticia->categoria->nombre}}</option> -->
                                
                                @foreach($categorias as $categoria)
                                <option value=" {{$categoria->id }}"
                                    {{ old('categoria', $categoria->id ) == $categoria->id ? 'selected' : '' }} >{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('categoria', '<span class="alert-danger">:message</span>') !!}
                        </div>
                        
                        <div class="mb-3 {{$errors->has('etiquetas') ? 'has-error' : ''}}">
                            <label for="etiqueta">Etiquetas</label>
                            <select class="select2bs4" multiple="multiple" data-placeholder="Seleccione una o etiquetas" style="width: 100%;" name="etiquetas[]" id="etiqueta" tabindex="6">
                                @foreach($etiquetas as $etiqueta)
                                <option {{ collect(old('etiquetas', $noticia->etiquetas->pluck('id')))->contains($etiqueta->id) ? 'selected' : '' }} value="{{$etiqueta->id}}">{{$etiqueta->nombre}}</option>
                                @endforeach  
                            </select>
                        </div>
                        {!! $errors->first('categoria', '<span class="alert-danger">:message</span>') !!}

                        <div class="mb-3">
                            <div class="dropzone">

                            </div>
                        </div>

                    </div>

                    
                </div>
                
                <a href="/noticias" class="btn btn-secondary" tabindex="5">Cancelar</a>
                <button  class="btn btn-primary" tabindex="6">Editar</button>
            </form>
       </div>  
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8">
            @foreach($noticia->fotos as $foto)
            <form action="{{route('fotos.destory', $foto)}}" method="POST">
            @csrf
            @method('DELETE')
                <div class="col-md-4">
                    <button class="btn btn-danger btn-sm" style="position:absolute"><i class="fas fas-remove"></i>x</button>
                    <img class="card-img-top img-responsive" src="{{url($foto->url)}}" alt="">
                </div>
            </form>
            @endforeach         
        </div>  
    </div>
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
    <link rel="stylesheet" href="/css/dropzone/dropzone.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css"> -->
@stop

@section('js')
    <!-- date-range-picker -->
    <script src="/js/daterangepicker/daterangepicker.js"></script>
    
    <!-- Summernote -->
    <script src="/js/summernote-bs4.min.js"></script>
    
    <!-- Select2 -->
    <script src="/js/select2/js/select2.full.js"></script>

    <!-- DropZone -->
    <script src="/js/dropzone/dropzone.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script> -->

    <script>
    // Dropzone
    var myDropzone = new Dropzone('.dropzone', {
        url:'/noticias/{{$noticia->url}}/fotos',
        acceptedFiles: 'image/*',
        maxFilesize: 2,
        maxFiles: 1,
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dictDefaultMessage: 'Arrastre las fotos aqui para subirlas'
    });

    myDropzone.on('error', function(file, res){
        console.log(res.file);
        var msg = res.file[0];
        $('.dz-error-message:last > span').text(msg)
    });
    
    Dropzone.autoDiscover = false;

    // Summernote
    $('#contenido').summernote({
        placeholder:'Redactar contenido',
        tabsize: 2,
        height: 400,
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

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4',
        tags: true
    })

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L',
    })
    
    </script>

@stop