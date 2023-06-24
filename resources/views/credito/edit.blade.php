@extends('adminlte::page')

@section('title', 'ARCA')

@section('content_header')
    <h1>Editar Libro Mayor</h1>
@stop

@section('content')
   <form action="/creditos/{{$credito->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="text" class="form-control" value="{{$credito->fecha}}"required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Rubro</label>
    <input id="rubro" name="rubro" type="text" class="form-control" value="{{$credito->rubro}}"required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ingreso</label>
    <input id="ingreso" name="ingreso" type="number" step="any" class="form-control" value="{{$credito->ingreso}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Egreso</label>
    <input id="egreso" name="egreso" type="number" step="any" class="form-control" value="{{$credito->egreso}}">
  </div>
  <a href="/creditos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop