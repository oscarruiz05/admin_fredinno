@extends('layouts.app')
@section('title', 'Productos')
@section('content')
    <main id="main-container">
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                <div>
                    <h1 class="h2 mb-1">
                       Productos
                    </h1>
                    <a class="btn btn-hero-primary" data-toggle="modal" data-target="#modal-crear-producto">
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
                                <th class="text-center">Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                                {{-- <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th> --}}
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <th class="text-center" scope="row">{{$producto->id}}</th>
                                    <th class="text-center" scope="row">{{$producto->codigo}}</th>
                                    <td class="font-w600">
                                        {{$producto->nombre}}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{number_format((int) $producto->precio)}}
                                    </td>
                                    <td><img src="{{asset($producto->imagen)}}" alt="" style="width: 50px;"></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" id="edit_producto" onclick="editarProducto({{$producto->id}},this)">
                                                <i class="fa fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary" onclick="elimnarProducto({{$producto->id}},this)">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Hover Table -->

            <!-- Modal para registrar productos -->
            <div class="modal fade" id="modal-crear-producto" tabindex="-1" role="dialog" aria-labelledby="modal-default-popout" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
                    <div class="modal-content">
                        <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Crear Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pb-1">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="codigo">Codigo:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Codigo Producto.." autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="nombre">Nombre:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Producto.." autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="precio">Precio:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio Producto.." autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="imagen">Imagen:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="file" class="form-control" name="imagen_producto" id="imagen_producto" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-sm btn-primary">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END Modal para registrar productos -->

            <!-- Modal para editar productos -->
            <div class="modal fade" id="modal-update-producto" tabindex="-1" role="dialog" aria-labelledby="modal-default-popout" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
                    <div class="modal-content" id="content_modal">
                        <form action="{{route('productos.update')}}" method="POST" enctype="multipart/form-data" id="update_product">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Editar Producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pb-1">
                                <input type="hidden" name="id_producto" id="id_producto">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="codigo">Codigo:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="number" class="form-control" name="codigo" id="codigo_edi" placeholder="Codigo Producto.." autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="nombre">Nombre:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nombre" id="nombre_edi" placeholder="Nombre Producto.." autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="precio">Precio:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="precio" id="precio_edi" placeholder="Precio Producto.." autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label for="imagen">Imagen:</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="file" class="form-control" name="imagen_producto" id="imagen_producto_edi" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-sm btn-primary">Actulizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END Modal para editar productos -->

        </div>
    </main>
@endsection

@section('myScripts')
    <script src="{{asset('assets/js/peticiones/productos.js')}}"></script>
@endsection
