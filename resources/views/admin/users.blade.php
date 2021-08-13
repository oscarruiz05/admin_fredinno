@extends('layouts.app')
@section('title', 'Usuarios')
@section('content')
    <main id="main-container">
        <div class="content">
            <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-left">
                <div>
                    <h1 class="h2 mb-1">
                       Usuarios
                    </h1>
                    <a class="btn btn-hero-primary" data-toggle="modal" data-target="#modal-crear-usuario">
                        <i class="fa fa-plus"></i><span> Crear</span>
                    </a>
                </div>
            </div>
            
        </div>
        <div class="content">
            <!-- Hover Table -->
            <div class="block block-rounded">
                <div class="block-content">
                    @if ($errors->any())
                        <div class="alert alert-danger mb-0 alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->has('create')) 
                        <div class="alert {{session()->has('create')==1? 'alert-success' : 'alert-danger'}} alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{session('mensaje')}}
                        </div>
                    @endif
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>                          
                                <th>Nombre</th>
                                <th>Identificación</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Tipo</th>
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <th class="text-center" scope="row">{{$usuario->id}}</th>
                                    <td class="font-w600">
                                        {{$usuario->name}}
                                    </td>
                                    <td class="font-w600">{{$usuario->identificacion}}</td>
                                    <td class="font-w600">
                                        {{$usuario->email}}
                                    </td>
                                    <th scope="row">{{$usuario->estado}}</th>
                                    <th scope="row">Admin</th>
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
                            @endforeach                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Hover Table -->
            <!-- Pop Out Default Modal -->
            <div class="modal fade" id="modal-crear-usuario" tabindex="-1" role="dialog" aria-labelledby="modal-default-popout" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Crear Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pb-1">
                            <form action="{{route('usuarios.store')}}" method="POST" style="margin: 20px 40px;">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3" for="nombre">Nombre:</label>
                                    <input type="text" class="form-control col-sm-9" id="nombre" name="nombre" placeholder="Nombre" autocomplete="off" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="identificacion">Identificación:</label>
                                    <input type="number" class="form-control col-sm-9" id="identificacion" name="identificacion" placeholder="Identificación" autocomplete="off" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="correo">Correo: (opcional)</label>
                                    <input type="email" class="form-control col-sm-9" id="correo" name="correo" placeholder="Correo" autocomplete="off">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="password">Contraseña:</label>
                                    <input type="password" class="form-control col-sm-9" id="password" name="password" placeholder="Contraseña" autocomplete="off" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="estado">estado:</label>
                                    <select class="form-control col-sm-9" name="estado" id="estado">
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3" for="tipo">Tipo:</label>
                                    <select class="form-control col-sm-9" name="tipo" id="tipo" onchange="selectTipo(this.value)">
                                        <option value="admin">Admin</option>
                                        <option value="general">General</option>
                                    </select>
                                </div>
                                <div class="form-group d-none permisos">
                                    <label class="d-block" for="">Permisos:</label>
                                    <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                        <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline1" name="example-checkbox-custom-inline1">
                                        <label class="custom-control-label" for="example-checkbox-custom-inline1">Option 1</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                        <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline2" name="example-checkbox-custom-inline2">
                                        <label class="custom-control-label" for="example-checkbox-custom-inline2">Option 2</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline custom-control-primary">
                                        <input type="checkbox" class="custom-control-input" id="example-checkbox-custom-inline3" name="example-checkbox-custom-inline3">
                                        <label class="custom-control-label" for="example-checkbox-custom-inline3">Option 3</label>
                                    </div>
                                </div>
                            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Crear</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            <!-- END Pop Out Default Modal -->
        </div>
    </main>
    <script src="{{asset('assets/js/peticiones/admin.js')}}"></script>
@endsection