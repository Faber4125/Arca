@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Listado de Contribuyentes</h1>
@stop

@section('content')
   <a href="articulos/create" class="btn btn-outline-primary mb-3">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Profesión</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->created_at->diffForHumans()}}</td>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->nombre}}</td>
            <td>{{$articulo->profesión}}</td>
            <td>{{$articulo->telefono}}</td>
            <td>
                <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                <a href="/articulos/{{ $articulo->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        responsive: true,
        autowidth: false,

        "language": {
            "lengthMenu": "_MENU_  Registros por pagina",
            "zeroRecords": "Nada Encontrado - Disculpa",
            "info": "Se muestra _PAGE_ de _PAGES_",
            "infoEmpty": "Registra un Contribuyente",
            "infoFiltered": "(Filtrado de _MAX_ total records)",
            "search": "Buscar"
        },
        "lengthMenu": [[15,25, 50, -1], [15, 25, 50, "All"]],

        dom: 'Blfrti',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ]
    });
} );
</script>

@stop