@extends('layouts.app')
@section('title', 'Productos')
@section('content')
    <main id="main-container">
        <div class="content">
            <!-- Hero -->
            <div class="bg-body-light d-print-none">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Facturas</h1>
                        <a href="{{route('ventas')}}" class="btn btn-alt-success my-2">
                            <i class="fa fa-fw fa-plus mr-1"></i> Nueva Factura
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Hero -->
        </div>
        <div class="content">
            <!-- Files -->
            <h2 class="content-heading border-black-op">
                <i class="far fa-fw fa-file mr-1"></i> Archivos (4)
            </h2>
            <div class="row items-push">

                <div class="col-sm-6 col-md-4 col-xl-3 d-flex align-items-center">
                    <!-- Example File -->
                    <div class="options-container fx-overlay-zoom-out w-100">
                        <!-- Example File Block -->
                        <div class="options-item block block-rounded bg-body mb-0">
                            <div class="block-content text-center">
                                <p class="mb-2 overflow-hidden">
                                    <i class="fa fa-fw fa-4x fa-file-pdf text-danger"></i>
                                </p>
                                <p class="font-w600 mb-0">
                                    Accounting.pdf
                                </p>
                                <p class="font-size-sm text-muted">
                                    33kb
                                </p>
                            </div>
                        </div>
                        <!-- END Example File Block -->

                        <!-- Example File Hover Options -->
                        <div class="options-overlay rounded-lg bg-white-50">
                            <div class="options-overlay-content">
                                <div class="mb-3">
                                    <a class="btn btn-hero-light" href="javascript:void(0)">
                                        <i class="fa fa-eye text-primary mr-1"></i> View
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-download text-black mr-1"></i>
                                    </a>
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-trash text-danger mr-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Example File Hover Options -->
                    </div>
                    <!-- END Example File -->
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 d-flex align-items-center">
                    <!-- Example File -->
                    <div class="options-container fx-overlay-zoom-out w-100">
                        <!-- Example File Block -->
                        <div class="options-item block block-rounded bg-body mb-0">
                            <div class="block-content text-center">
                                <p class="mb-2 overflow-hidden">
                                    <i class="fa fa-fw fa-4x fa-file-pdf text-danger"></i>
                                </p>
                                <p class="font-w600 mb-0">
                                    Accounting.pdf
                                </p>
                                <p class="font-size-sm text-muted">
                                    33kb
                                </p>
                            </div>
                        </div>
                        <!-- END Example File Block -->

                        <!-- Example File Hover Options -->
                        <div class="options-overlay rounded-lg bg-white-50">
                            <div class="options-overlay-content">
                                <div class="mb-3">
                                    <a class="btn btn-hero-light" href="javascript:void(0)">
                                        <i class="fa fa-eye text-primary mr-1"></i> View
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-download text-black mr-1"></i>
                                    </a>
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-trash text-danger mr-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Example File Hover Options -->
                    </div>
                    <!-- END Example File -->
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 d-flex align-items-center">
                    <!-- Example File -->
                    <div class="options-container fx-overlay-zoom-out w-100">
                        <!-- Example File Block -->
                        <div class="options-item block block-rounded bg-body mb-0">
                            <div class="block-content text-center">
                                <p class="mb-2 overflow-hidden">
                                    <i class="fa fa-fw fa-4x fa-file-pdf text-danger"></i>
                                </p>
                                <p class="font-w600 mb-0">
                                    Accounting.pdf
                                </p>
                                <p class="font-size-sm text-muted">
                                    33kb
                                </p>
                            </div>
                        </div>
                        <!-- END Example File Block -->

                        <!-- Example File Hover Options -->
                        <div class="options-overlay rounded-lg bg-white-50">
                            <div class="options-overlay-content">
                                <div class="mb-3">
                                    <a class="btn btn-hero-light" href="javascript:void(0)">
                                        <i class="fa fa-eye text-primary mr-1"></i> View
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-download text-black mr-1"></i>
                                    </a>
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-trash text-danger mr-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Example File Hover Options -->
                    </div>
                    <!-- END Example File -->
                </div>

                <div class="col-sm-6 col-md-4 col-xl-3 d-flex align-items-center">
                    <!-- Example File -->
                    <div class="options-container fx-overlay-zoom-out w-100">
                        <!-- Example File Block -->
                        <div class="options-item block block-rounded bg-body mb-0">
                            <div class="block-content text-center">
                                <p class="mb-2 overflow-hidden">
                                    <i class="fa fa-fw fa-4x fa-file-pdf text-danger"></i>
                                </p>
                                <p class="font-w600 mb-0">
                                    Accounting.pdf
                                </p>
                                <p class="font-size-sm text-muted">
                                    33kb
                                </p>
                            </div>
                        </div>
                        <!-- END Example File Block -->

                        <!-- Example File Hover Options -->
                        <div class="options-overlay rounded-lg bg-white-50">
                            <div class="options-overlay-content">
                                <div class="mb-3">
                                    <a class="btn btn-hero-light" href="javascript:void(0)">
                                        <i class="fa fa-eye text-primary mr-1"></i> View
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-download text-black mr-1"></i>
                                    </a>
                                    <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                        <i class="fa fa-trash text-danger mr-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Example File Hover Options -->
                    </div>
                    <!-- END Example File -->
                </div>
                
            </div>
            <!-- END Files -->
        </div>
    </main>
@endsection