<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-naranja-png-2022.png" type="image/png"/>
    <title>App Comeva Home | SENA</title>

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Tus estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/cargando.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>
<!-- Navbar -->
<nav class="navbar navbar-dark sticky-top" style="background-color: #5eb319 !important;">
    <div class="container-fluid d-flex align-items-center">
        <!-- Botón de despliegue (Offcanvas) -->
        <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
            <i class="bi bi-list fs-2"></i>
        </button>
        <!-- Título ajustado más cerca del botón de despliegue -->
        <a class="navbar-brand ms-1">
            <h1 class="mb-0" style="font-size: 24px;">Sistema de Comités y Evaluación del SENA</h1>
        </a>
        <!-- Elementos de la derecha -->
        <div class="d-flex align-items-center ms-auto">
            <!-- Botón de notificaciones -->
            <div class="dropdown me-2">
                <button class="btn btn-outline-light position-relative" type="button" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-bell fs-4"></i>
                    <!-- Cambiar el color del badge a #007d79 -->
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-custom-notification">
                        {{ Auth::user()->unreadNotifications ? Auth::user()->unreadNotifications->count() : 0 }}
                    </span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                    @if (Auth::user()->unreadNotifications && Auth::user()->unreadNotifications->count() > 0)
                        @foreach (Auth::user()->unreadNotifications as $notification)
                            <li><a class="dropdown-item" href="#">{{ $notification->data['message'] }}</a></li>
                        @endforeach
                    @else
                        <li><span class="dropdown-item"><h5>No hay notificaciones</h5></span></li>
                    @endif
                </ul>
            </div>
            <!-- Dropdown de usuario -->
            <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle d-flex align-items-center" type="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-4"></i> <h4>{{ Auth::user()->name }}</h4>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                    <li><span class="dropdown-item-text"><h5>{{ ucfirst(Auth::user()->rol) }}</h5></span></li>
                    <li><span class="dropdown-item-text"><h5>{{ ucfirst(Auth::user()->identificacion) }}</h5></span></li>
                  
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item text-white" type="submit" style="background-color: #007d79;">Cerrar sesión</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>


<!-- Menú lateral Offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
        <h4 class="offcanvas-title" id="sidebarMenuLabel">Menú</h4>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Aquí se mostrará el menú dependiendo del rol -->
        @include('partials.menu')
    </div>
    
</div>

<!-- Contenido principal -->
<div class="container mt-5">

    <!-- Personalización del menú de inicio -->
    <div class="center-image-container">
        <img src="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-verde-svg-2022.svg" alt="Logo SENA" class="center-image">
    </div>
    <h3>
        Bienvenido, {{ Auth::user()->rol }}
    </h3>
    <div class="container-fluid">
        <!-- Contenido principal sin interferencia del menú lateral -->
        <main class="content">
            <!-- Aquí se mostrará el contenido dependiendo de la selección y el rol -->
            @yield('content')
        </main>
    </div>
</div>

<footer>
    Sistema Interactivo para el Monitoreo y Evaluación de Comités &copy; SENA 2024 Todos los derechos reservados 
</footer>
<br>

<!-- JavaScript de Bootstrap y dependencias -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/cargando.js') }}"></script>
</body>


<!-- Modal de Advertencia de Expiración de Sesión -->
<div class="modal fade" id="modal-expiracion" tabindex="-1" aria-labelledby="modalExpiracionLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="modalExpiracionLabel">Advertencia de Inactividad</h5>
      </div>
      <div class="modal-body">
        Tu sesión expirará en <span id="contador-expiracion">60</span> segundos por inactividad.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="continuar-sesion">Continuar Sesión</button>
      </div>
    </div>
  </div>
</div>


</html>