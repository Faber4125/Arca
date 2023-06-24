@extends('adminlte::page')

@section('title', 'ARCA CONTABLE')

@section('content_header')
    <h1>Editar Ingreso</h1>
@stop

@section('content')
   <form action="/ingresos/{{$ingreso->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" tabindex="1" class="form-control is-valid" value="{{$ingreso->nombre}}"required>  
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Concepto</label>
    <input id="concepto" name="concepto" type="text" class="form-control is-valid" value="{{$ingreso->concepto}}"required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ingreso</label>
    <input id="cantidad" name="cantidad" type="number" step="any" class="form-control" value="{{$ingreso->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Egreso</label>
    <input id="cantidad2" name="cantidad2" type="number" step="any" class="form-control" value="{{$ingreso->cantidad2}}">
  </div>
  <a href="/ingresos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop