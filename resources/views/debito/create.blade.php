@extends('adminlte::page')

@section('title', 'ARCA CONTABLE')

@section('content_header')
   <h1>Crear Informe</h1>
@stop

@section('content')
    
    
<form action="/creditos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="text" tabindex="1" class="form-control is-valid" value="" required>    
  </div>
  <div class="mb-3">
  <label for="" class="form-label">Rubro</label>
<input id="rubro" name="rubro" list="datalistOptions" id="exampleDataList" placeholder="Escoja una Opción" tabindex="2" class="form-control is-valid" value="" required>
<datalist id="datalistOptions">
<option value="Pago Arriendo de Local de Culto">
  <option value="Pago de servicios Publicos">
  <option value="Bonificación Pastoral">
  <option value="Gastos de Representacion">
  <option value="Evangelismo">
  <option value="Ayuda Social">
  <option value="Compra Muebles Y enseres">
  <option value="Suministro de Papeleria">
  <option value="Reparaciones Locativas">
  <option value="Reparacion de Equipos e Instrumentos">
</datalist>
</div>
  <div class="mb-3">
    <label for="" class="form-label">Egreso</label>
    <input id="egreso" name="egreso" type="number" tabindex="4" class="form-control is-valid" value="" required>
  </div>
  <a href="/creditos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop