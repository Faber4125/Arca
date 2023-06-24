@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Inventario</h1>
@stop

@section('content')
<a href="/create" class="btn btn-outline-info mb-3">Crear Comprobante</a>
<table id="posts" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">

                  <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Responsable</th>
                    <th>Description</th>
                    <th>Comprobante</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach ($posts as $post)
                 <tr>
                       <th scope="row">{{ $post->id }}</th>
                       <td>{{ $post->title }}</td>
                       <td>{{ $post->author }}</td>
                       <td>{{ $post->body }}</td>
                       <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                       <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Editar</a></td>
                       <td>
                           <form action="/delete/{{ $post->id }}" method="post">
                            <button class="btn btn-outline-danger" onclick="return confirm('Guardado Correctamente?');" type="submit">Eliminar</button>
                            @csrf
                            @method('delete')
                        </form>
                       </td>

                   </tr>
                   @endforeach

                </tbody>
              </table>
        </div>




    </body>
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
    $('#posts').DataTable({

        responsive: true,
        autowidth: false,

        "language": {
            "lengthMenu": "_MENU_  Registros por pagina",
            "zeroRecords": "Nada Encontrado - Disculpa",
            "info": "Se muestra _PAGE_ de _PAGES_",
            "infoEmpty": "Registra un Articulo",
            "infoFiltered": "(Filtrado de _MAX_ total records)",
            "search": "Buscar"
        },

        "lengthMenu": [[15,25, 50, -1], [15, 25, 50, "All"]],

        dom: 'Blfrti',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ],
        
  

        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
        
        }
    });
} );
</script>

@stop
