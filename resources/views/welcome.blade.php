@extends('layouts.app')
@section('title', 'Admin')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                <div>
                    <h1 class="h2 mb-1">
                        Bienvenido
                    </h1>
                    <p class="mb-0">
                        {{ Auth::user()->name }}.
                    </p>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <div class="content">
            <h2 class="content-heading">Información</h2>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="far fa-2x fa-user-circle text-success"></i>
                                    </div>
                                    <div class="ml-3 text-right">
                                        <p class="font-size-h3 font-w300 mb-0">
                                            +78%
                                        </p>
                                        <p class="text-muted mb-0">
                                            Usuarios
                                        </p>
                                    </div>
                                </div>
                            </a>
                </div>
                <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                                <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <p class="font-size-h3 font-w300 mb-0">
                                            960
                                        </p>
                                        <p class="text-muted mb-0">
                                            Ventas
                                        </p>
                                    </div>
                                    <div>
                                        <i class="fa fa-2x fa-chart-area text-danger"></i>
                                    </div>
                                </div>
                            </a>
                </div>
                <div class="col-md-6 col-xl-3">
                        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                <div class="mr-3">
                                    <p class="font-size-h3 font-w300 mb-0">
                                        359
                                    </p>
                                    <p class="text-muted mb-0">
                                        Clientes
                                    </p>
                                </div>
                                <div>
                                    <i class="fa fa-2x fa-box text-warning"></i>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-link-pop" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div>
                                <i class="fa fa-2x fa-arrow-up text-primary"></i>
                            </div>
                            <div class="ml-3 text-right">
                                <p class="font-size-h3 font-w300 mb-0">
                                    + 30%
                                </p>
                                <p class="text-muted mb-0">
                                    Vendedores
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
