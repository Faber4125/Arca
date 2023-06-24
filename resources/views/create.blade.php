
@extends('adminlte::page')

@section('title', 'ARCA CONTABLE')

@section('content_header')
   <h1>Crear Comprobante</h1>
@stop

@section('content')
    
<body>

    <form action="/post" method="post" enctype="multipart/form-data">
       @csrf
         <div class="mb-3">
         <label for="" class="form-label">Fecha</label>
        <input type="text" name="title" placeholder="Fecha"type="text" class="form-control is-valid" value="" required>
        </div>
        <div class="mb-3">
         <label for="" class="form-label">Responsable</label>
         <input type="text" name="author"  placeholder="Responsable" class="form-control is-valid" value="" required>
        </div>
        <div class="mb-3">
         <label for="" class="form-label">Descripción</label>
         <Textarea name="body" cols="10" rows="8" class="form-control is-valid" value="" required placeholder="Descripción"></Textarea>
        </div>
        <div class="mb-3">
         <label for="" class="form-label"></label>
         <input type="file" id="input" name="cover" class="form-control is-valid" value="" required>
        </div>    

                 <button type="submit" class="btn btn-outline-primary" tabindex="5">Guardar</button>
                </form>
           </div>
        </div>
    </div>



 </body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop






