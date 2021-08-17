<!-- Sidebar -->
<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <!-- Logo -->
            <a class="font-w600 text-white tracking-wide" href="{{route('welcome')}}">
                <span class="smini-visible">
                    D<span class="opacity-75">x</span>
                </span>
                <span class="smini-hidden">
                   Fredinno<span class="opacity-75">Helados</span>
                </span>
            </a>
            <!-- END Logo -->
        </div>
    </div>
    <!-- END Side Header -->
    <!-- Sidebar Scrolling -->
<div class="js-sidebar-scroll">
    <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ request()->routeIs('welcome') ? ' active' : '' }}" href="{{route('welcome')}}">
                        <i class="nav-main-link-icon fa fa-desktop"></i>
                        <span class="nav-main-link-name">Escritorio</span>
                    </a>
                </li>
                <li class="nav-main-heading">Sistema</li>
                <a class="nav-main-link {{ request()->routeIs('productos.index') ? ' active' : '' }}" href="{{route('productos.index')}}">
                    <li class="nav-main-link-icon fa fa-clipboard "></li><span class="nav-main-link-name"> productos</span>
                </a>

                <a class="nav-main-link {{ request()->routeIs('ventas') ? ' active' : '' }}" href="{{route('ventas')}}">
                    <li class="nav-main-link-icon fa fa-shopping-cart "></li><span class="nav-main-link-name"> Crear Venta</span>
                </a>

                <a class="nav-main-link {{ request()->routeIs('facturas*') ? ' active' : '' }}" href="{{route('facturas')}}">
                    <li class="nav-main-link-icon fa fa-file "></li><span class="nav-main-link-name"> Facturas</span>
                </a>

                <li class="nav-main-heading">Vendedores</li>
                <a class="nav-main-link {{ request()->routeIs('vendedores*') ? ' active' : '' }}" href="{{route('vendedores')}}">
                    <li class="nav-main-link-icon fa fa-users "></li><span class="nav-main-link-name"> Vendedores</span>
                </a>
                <a class="nav-main-link {{ request()->routeIs('vendedores*') ? ' active' : '' }}" href="{{route('vendedores')}}">
                    <li class="nav-main-link-icon fa fa-user-tag "></li><span class="nav-main-link-name"> Ventas Diarias</span>
                </a>

                <li class="nav-main-heading">Clientes</li>
                <a class="nav-main-link" href="">
                    <li class="nav-main-link-icon fa fa-users "></li><span class="nav-main-link-name"> Clientes</span>
                </a>

                <li class="nav-main-heading">Administrador</li>
                <a class="nav-main-link {{ request()->routeIs('usuarios') ? ' active' : '' }}" href="{{route('usuarios')}}">
                    <li class="nav-main-link-icon fa fa-user-friends "></li><span class="nav-main-link-name"> Usuarios</span>
                </a>
            </ul>
        </div>
    <!-- END Side Navigation -->
</div>
<!-- END Sidebar Scrolling -->

</nav>
<!-- END Sidebar -->
