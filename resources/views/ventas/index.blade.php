@extends('layouts.app')
@section('title', 'Ventas')
@section('content')
    <main id="main-container">
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                <div>
                    <h1 class="h2 mb-1">
                       Ventas
                    </h1>
                </div>
            </div>
        </div>
        {{-- formulario crear venta --}}
        <div class="content">
            <h2 class="content-heading">Registrar productos</h2>
            <div class="row push">
                <div class="col-lg-12">
                    @foreach ($productos as $producto)
                        
                    @endforeach
                    <form action="#" method="get" id="agregar-producto">
                        <div class="form-group form-row">
                            <div class="col-2">
                                <label for="">Codigo</label>
                                <input class="form-control" name="codigo" id="codigo" type="number"  style="width: 90%;">
                            </div>
                            <div class="col-3">
                                <label for="">Nombre Producto</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="helado" disabled>
                                {{-- <select class="form-control" name="nombre-producto" id="nombre-producto" style="width: 90%;" required>
                                    <option value="">Seleccione Producto</option>
                                    <option value="1">Vaso medio litro</option>
                                    <option value="2">Choco cono</option>
                                    <option value="3">Platillo</option>
                                </select> --}}
                            </div>
                            <div class="col-1">
                                <label for="">Cantidad</label>
                                <input class="form-control" id="cantidad"  type="number" value="1" style="width: 90%;">
                            </div>
                            <div class="col-3">
                                <label for="">precio Unt</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                    <input class="form-control" id="precio-unt"  type="text" value="3000" style="width: 60%;">
                                </div>
                                
                            </div>
                            <div class="col-3">
                                <label for="">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                    <input class="form-control" id="precio" type="text" value="3000" style="width: 60%;" disabled>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary" href="#">Añadir</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- formulario crear venta end --}}
        <div class="content">
            <!-- Products -->
            <form action="" method="POST">
                <div class="form-group form-row">
                    <div class="col-6">
                        <label for="">Cliente</label>
                        <input class="form-control" name="id_cliente" id="id_cliente"  type="hidden">
                        <select class="form-control" name="cliente" id="cliente" style="width: 90%;" required>
                            <option value="">Seleccione Cliente</option>
                            <option value="1">Vaso medio litro</option>
                            <option value="2">Choco cono</option>
                            <option value="3">Platillo</option>
                        </select>
                    </div>
                </div>
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">productos</h3>
                    </div>
                    <div class="block-content">
                        <div class="table-responsive">
                            <table class="table table-borderless table-striped table-vcenter font-size-sm" id="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;">Codigo</th>
                                        <th>Nombre Producto</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-right" style="width: 10%;">Valor Unt</th>
                                        <th class="text-right" style="width: 10%;">Precio</th>
                                        <th class="text-right" style="width: 10%;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="ver-producto">
                                    <tr>
                                        <td class="text-center"><strong><input type="text" class="form-control" name="detalle_cod_producto" id="detalle_cod_producto" value="123" disabled></strong></td>
                                        <td><a href="#"><strong>Helado</strong></a></td>
                                        <td class="text-center"><strong><input type="text" class="form-control" name="detalle_cant_producto" id="detalle_cant_producto" value="1" style="width: 12%; margin: 0 auto;" disabled></strong></td>
                                        <td class="text-right">$2.500,00</td>
                                        <td class="text-right">$2.500,00</td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-block btn-primary" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                                <tfoot>
                                    <tr class="table-active">
                                        <td colspan="5" class="text-right text-uppercase"><strong>Total:</strong></td>
                                        <td class="text-right" id="total_global"><strong>$2.500,00</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div id="productos">
                    <input type="hidden" name="cantidad_gobal" id="cantidad_gobal" value="0">
                    <input type="hidden" name="total" id="total" value="0">
                </div> --}}
                <a class="btn btn-outline-primary" href="#"><i class="far fa-file-pdf"></i><span> Generar Factura</span></a>
            </form>
            <!-- END Products -->
        </div>
    </main>
    <script src="{{asset('assets/js/peticiones/ventas1.js')}}"></script>
@endsection