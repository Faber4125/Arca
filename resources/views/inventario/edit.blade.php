@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editar Artículo</h1>
@stop

@section('content')
   <form action="/inventarios/{{$inventario->id}}" method="POST">    
   @csrf
   @method('PUT')
   <div class="mb-3">
    <label for="" class="form-label">Articulo</label>
    <input id="articulo" name="articulo" type="text" class="form-control is-valid" value="{{$inventario->articulo}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Marca</label>
    <input id="marca" name="marca" type="text" class="form-control is-valid" value="{{$inventario->marca}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Modelo</label>
    <input id="modelo" name="modelo" type="text" class="form-control is-valid" value="{{$inventario->modelo}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad" name="cantidad" type="text" class="form-control is-valid" value="{{$inventario->cantidad}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio Unitario</label>
    <input id="preciou" name="preciou" type="number" class="form-control is-valid" value="{{$inventario->preciou}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio Total</label>
    <input id="total" name="total" type="number" class="form-control is-valid" value="{{$inventario->total}}" required>
  </div>
  <a href="/inventarios" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop