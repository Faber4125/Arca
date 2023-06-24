@extends('adminlte::page')

@section('title', 'ARCA CONTABLE')

@section('content_header')
   <h1>Crear Ingreso</h1>
@stop

@section('content')
    
<form action="/ingresos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" tabindex="1" class="form-control is-valid" value="" required>    
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Concepto</label>
<input id="concepto" name="concepto" list="datalistOptions" id="exampleDataList" placeholder="Escoja una Opción" tabindex="2" class="form-control is-valid" value="" required>
<datalist id="datalistOptions">
  <option value="Diesmos">
  <option value="Ofrendas">
  <option value="Pacto">
  <option value="Actividades">
  <option value="Donación especial">
</datalist>
</div>
  <div class="mb-3">
    <label for="" class="form-label">Ingreso</label>
    <input id="cantidad" name="cantidad" type="number" tabindex="3" class="form-control is-valid" value="" required>
  </div>
  <a href="/ingresos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop