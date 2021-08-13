@extends('layouts.app')
@section('title', 'Factura')
@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light d-print-none">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Facturas</h1>
                    <button type="button" class="btn btn-alt-success my-2">
                        <i class="fa fa-fw fa-plus mr-1"></i> Nueva Factura
                    </button>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <!-- Invoice -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">#INV01364</h3>
                    <div class="block-options">
                        <!-- Print Page functionality is initialized in Helpers.print() -->
                        <button type="button" class="btn-block-option" onclick="Dashmix.helpers('print');">
                            <i class="si si-printer mr-1"></i> Print Invoice
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="p-sm-4 p-xl-7">
                        <!-- Invoice Info -->
                        <div class="row mb-5">
                            <!-- Company Info -->
                            <div class="col-6">
                                <img src="{{asset('assets/media/logo/logo.png')}}" alt="" style="width: 120px; margin-left: -13px;">
                                {{-- <p class="h3">Fredinno Rivera</p> --}}
                                <address>
                                    Carrera 1a # 9a - 67<br>
                                    Rivera - Huila<br>
                                    fredinnorivera@gmail.com
                                </address>
                            </div>
                            <!-- END Company Info -->

                            <!-- Client Info -->
                            <div class="col-6 text-right">
                                <p class="h3">Client</p>
                                <address>
                                    Street Address<br>
                                    State, City<br>                                 
                                    ctr@example.com
                                </address>
                            </div>
                            <!-- END Client Info -->
                        </div>
                        <!-- END Invoice Info -->

                        <!-- Table -->
                        <div class="table-responsive push">
                            <table class="table table-bordered">
                                <thead class="bg-body">
                                    <tr>
                                        <th class="text-center" style="width: 60px;"></th>
                                        <th>Producto</th>
                                        <th class="text-center" style="width: 90px;">Cantidad</th>
                                        <th class="text-right" style="width: 120px;">Precio Unt</th>
                                        <th class="text-right" style="width: 120px;">Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <p class="font-w600 mb-1">Logo Creation</p>
                                        </td>
                                        <td class="text-center">
                                            <span>1</span>
                                        </td>
                                        <td class="text-right">$1.800,00</td>
                                        <td class="text-right">$1.800,00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <p class="font-w600 mb-1">Online Store Design &amp; Development</p>
                                        </td>
                                        <td class="text-center">
                                            <span>2</span>
                                        </td>
                                        <td class="text-right">$20.000,00</td>
                                        <td class="text-right">$20.000,00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>
                                            <p class="font-w600 mb-1">App Design</p>
                                        </td>
                                        <td class="text-center">
                                            <span>5</span>
                                        </td>
                                        <td class="text-right">$3.200,00</td>
                                        <td class="text-right">$3.200,00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="font-w700 text-uppercase text-right bg-body-light">Total</td>
                                        <td class="font-w700 text-right bg-body-light">$30.000,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Table -->

                        <!-- Footer -->
                        <p class="text-muted text-center my-5">
                            Gracias por su compra.
                        </p>
                        <!-- END Footer -->
                    </div>
                </div>
            </div>
            <!-- END Invoice -->
        </div>
        <!-- END Page Content -->
        <div class="content">
            
        </div>
    </main>
@endsection