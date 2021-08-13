@extends('layouts.app')
@section('title', 'Productos')
@section('content')
    <main id="main-container">
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                <div>
                    <h1 class="h2 mb-1">
                       Clientes
                    </h1>
                    <a class="btn btn-hero-primary">
                        <i class="fa fa-plus"></i><span> Crear</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <!-- Hover Table -->
            <div class="block block-rounded">
                <div class="block-content">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>                          
                                <th>Nombre</th>
                                <th>Correo</th>
                                {{-- <th></th> --}}
                                {{-- <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th> --}}
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th class="text-center" scope="row">1</th>
                                    <td class="font-w600">
                                        Oscar Ruiz
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        oscar@cdsfhui.d
                                    </td>
                                    {{-- <td><img src="{{asset('assets/media/photos/photo1.jpg')}}" alt="" style="width: 50px;"></td> --}}
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>                          
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Hover Table -->
            <!-- Pop Out Default Modal -->
            <div class="modal fade" id="modal-crear-producto" tabindex="-1" role="dialog" aria-labelledby="modal-default-popout" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Crear Producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pb-1">
                            <p>formulario</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Pop Out Default Modal -->
        </div>
    </main>
@endsection