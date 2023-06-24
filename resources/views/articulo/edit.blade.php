@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Artículo</h1>
@stop

@section('content')
   <form action="/articulos/{{$articulo->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$articulo->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Profesión</label>
    <input id="profesión" name="profesión" type="text" class="form-control" value="{{$articulo->profesión}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$articulo->telefono}}">
  </div>
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop