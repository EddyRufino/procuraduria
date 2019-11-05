<div class="sidebar">
	<a href="{{ route('welcome') }}" >&nbsp;&nbsp;&nbsp;&nbsp;
			Inicio
	</a>
	{{-- <h5>Mesa de partes:</h5> --}}
{{-- 	@auth
        @if (auth()->user()->hasRoles(['admin']))
            <li class="">
                <a class=""
                href="{{ route('expedientes.index') }}"
                    >Lista Expediente</a>
            </li>
        @endif
    @endauth

	<a href="{{ route('expedientes.create') }}"> Nuevo Expediente</a>
	<a href="{{ route('materias.create') }}">Nueva Materia</a>
	<a href="{{ route('juzgados.create') }}">Nuevo Juzgado</a>
	<a href="{{ route('procesos.create') }}">Nuevo Proceso</a>
	<a href="{{ route('pendientes.index') }}">Asignados</a>
    @auth
        @if (auth()->user()->hasRoles(['admin']))
            <li class="">
                <a class=""
                href="{{ route('usuarios.index') }}"
                    >Usuarios</a>
            </li>
        @endif
    @endauth --}}

	<nav class="navbar-light ">

		@if (auth()->user()->hasRoles(['admin', 'recep']))

			<li class="nav-item dropdown" style="list-style: none">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Mesa de partes
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          	<a class="dropdown-item" href="{{ route('expedientes.create') }}">Nuevo expediente</a>
		          	<a class="dropdown-item" href="{{ route('materias.create') }}">Nueva Materia</a>
		          	<a class="dropdown-item" href="{{ route('juzgados.create') }}">Nuevo Juzgado</a>
		          	<a class="dropdown-item" href="{{ route('procesos.create') }}">Nuevo Proceso</a>
		        	{{-- @auth --}}
				        {{-- @if (auth()->user()->hasRoles(['admin'])) --}}
			                <a class="dropdown-item"
			                href="{{ route('expedientes.index') }}"
			                    >Lista Expediente</a>
				        {{-- @endif --}}
				    {{-- @endauth --}}
		          {{-- <a class="dropdown-item" href=""></a> --}}
		        </div>
	      	</li>

      	@endif

      	@if (auth()->user()->hasRoles(['admin', 'mod']))

			<li class="nav-item dropdown" style="list-style: none">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Pendientes
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          	<a class="dropdown-item" href="{{ route('pendientes.index') }}">Casos asignados</a>
		        </div>
	      	</li>

      	@endif

    	@auth
	        @if (auth()->user()->hasRoles(['admin']))
				<li class="nav-item dropdown" style="list-style: none">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Usuarios
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          	<a class="dropdown-item" href="{{ route('usuarios.create') }}">Nuevo usuario</a>
			          	<a class="dropdown-item" href="{{ route('usuarios.index') }}">Lista usuario</a>
			        </div>
		      	</li>
	        @endif
	    @endauth

	</nav>
</div>