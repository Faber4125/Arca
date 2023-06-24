@extends('adminlte::page')

@section('title', 'ARCA CONTABLE')

@section('content_header')
    <h1>Editar Egreso</h1>
@stop

@section('content')
   <form action="/egresos/{{$egreso->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$egreso->nombre}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Concepto</label>
    <input id="concepto" name="concepto" type="text" class="form-control" value="{{$egreso->concepto}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="cantidad2" name="cantidad2" type="number" step="any" class="form-control" value="{{$egreso->cantidad2}}">
  </div>
  <a href="/egresos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop