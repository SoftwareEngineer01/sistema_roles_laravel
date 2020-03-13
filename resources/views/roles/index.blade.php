@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    Roles
                    {{-- Puedes crear roles? --}}
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover" id="example1">
                        <thead>
                            <tr>                                
                                <th>Nombre</th>                               
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                               <td>{{ $role->name }}</td>
                               <td style="display: -webkit-inline-box;" class="text-center">
                                    
                                    <!-- Tienes permiso de ver el detalle de un rol? -->
                                    @can('roles.show')
                                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-info mx-1">
                                            <i class="far fa-eye" aria-hidden="true"></i>
                                        </a>
                                    @endcan

                                    <!-- Tienes permiso de editar un producto? -->
                                    @can('roles.edit')                                   
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn
                                            btn-warning btn-sm">
                                            <i class="far fa-edit" aria-hidden="true"></i>
                                        </a>  
                                    @endcan  

                                    <!-- Tienes permiso de eliminar un producto? -->
                                    @can('roles.destroy')                        
                                        {!! Form::open(['route' => ['roles.destroy', $role->id], 
                                        'method' => 'DELETE', 'style' => 'margin-left: 4px']) !!}
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Seguro desea eliminar el registro')">
                                                <i class="far fa-trash-alt" aria-hidden="true"></i>
                                            </button>
                                        {!! Form::close() !!}
                                    @endcan

                                </td>  
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')


<script>
    $(function () {
        let idioma = {
        "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
    };

        $("#example1").DataTable({
            "language" : idioma
        });
        
    });
</script>

@endpush