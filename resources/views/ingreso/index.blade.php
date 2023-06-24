@extends('adminlte::page')

@section('title', 'ARCA CONTABLE')

@section('content_header')
    <h1>Libro de Ingreso Diario</h1>
@stop

@section('content')
   <a href="ingresos/create" class="btn btn-outline-info mb-3">Crear Ingreso</a>
   <a href="egresos/create" class="btn btn-outline-danger mb-3">Crear Egreso</a>
<table id="ingresos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Fecha</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Concepto</th>
            <th scope="col">Ingreso</th>
            <th scope="col">Egreso</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    
        @foreach ($ingresos as $ingreso)
      
        <tr>
            <td>{{ $ingreso->created_at->toFormattedDateString()}}</td>
            <td>{{$ingreso->id}}</td>
            <td>{{$ingreso->nombre}}</td>
            <td>{{$ingreso->concepto}}</td>
            <td>{{ number_format($ingreso->cantidad) }}</td>
            <td>{{ number_format($ingreso->cantidad2) }}</td>
            <td>      
                <form action="{{ route ('ingresos.destroy',$ingreso->id)}}" method="POST">
                <a href="/ingresos/{{ $ingreso->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody> 
    <tfoot>
            <tr>
                <th colspan="4" colspan="5" >Total:</th>
                <th></th>
                <th></th>
            </tr>

        </tfoot> 
</table>
<script>

</script>

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
    $('#ingresos').DataTable( {
        "language": {
            "lengthMenu": "_MENU_  Registros por pagina",
            "zeroRecords": "Nada Encontrado - Disculpa",
            "info": "Se muestra _PAGE_ de _PAGES_",
            "infoEmpty": "Ingresa un Registro",
            "infoFiltered": "(Filtrado de _MAX_ total records)",
            "search": "Buscar"
        },
        "lengthMenu": [[15,25, 50, -1], [15, 25, 50, "All"]],
        
        dom: 'Blfrti',
        buttons:  [
            'copy', 'excel', 'pdf', 'print'
        ],
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                totall = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                
 
            // Total over this page
            pageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
                pageTotall = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            
            // Update footer
            $( api.column( 4 ).footer() ).html(
                '$'+pageTotal 
            );
            $( api.column( 5 ).footer() ).html(
                '$'+pageTotall 
            );
        }
    } );
} );
</script>
@stop