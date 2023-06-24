@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear Artículo</h1>
@stop

@section('content')
    
<form action="/articulos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control is-valid" value="" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Profesión</label>
    <input id="profesión" name="profesión" type="text" class="form-control is-valid" value="" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control is-valid" value="" required>
  </div>
  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop