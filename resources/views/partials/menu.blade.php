<div class="position-sticky pt-3">
    <ul class="nav flex-column">
        @if (Auth::check())
            @php
                $rol = strtolower(Auth::user()->rol); 
            @endphp

        @if ($rol == 'coordinador')
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('roles.dashboard') }}">
                    <h4>Funciones</h4>
                </a>
            </li>
            <!-- Otras opciones para coordinador -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <h4>Volver</h4>
                </a>
            </li>
        @elseif ($rol == 'instructor')
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('roles.dashboard') }}">
                    <h4>Funciones</h4>
                </a>
            </li>
            <!-- Otras opciones para instructor -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <h4>Volver</h4>
                </a>
            </li>
        @elseif ($rol == 'abogada')
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('roles.dashboard') }}">
                    <h4>Funciones</h4>
                </a>
            </li>
            <!-- Otras opciones para abogada -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <h4>Volver</h4>
                </a>
            </li>
        @elseif ($rol == 'administrador')
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('roles.dashboard') }}">
                   <h4>Funciones</h4>
                </a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <h4>Volver</h4>
                </a>
            </li>
        @else
            <!-- Opcional: se podría agregar algo para el caso de rol indefinido o diferente -->
        @endif
        @endif
    </ul>
</div>
