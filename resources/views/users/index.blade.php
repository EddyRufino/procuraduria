@extends('principal')

@section('content')
	<main class="main">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
                    <i class="fa fa-align-justify"></i> Usuarios
                    <button type="button"  class="btn btn-secondary">
                        <a href="{{ route('usuarios.create') }}"><i class="icon-plus"></i>&nbsp;Nuevo</a>
                    </button>
                </div>
                <div class="card-body overflow-auto">
					<table class="table table-bordered table-striped table-sm">
				        <thead>
				            <tr>
				                {{-- <th>Opciones</th> --}}
				                <th>Nombre</th>
				                <th>Email</th>
				                <th>Role</th>
				                <th>Estado</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach ($users as $user)
				                <tr>
				                    {{-- <td>
				                        <button type="button" class="btn btn-warning btn-sm">
				                          <i class="icon-pencil">
				                          </i>
				                        </button> &nbsp;
				                        <button type="button" class="btn btn-danger btn-sm">
				                          <i class="icon-trash"></i>
				                        </button>
				                    </td> --}}
				                    <td>{{ $user->name }}</td>
				                    <td>{{ $user->email }}</td>
				                    <td>{{ $user->roles->pluck('display_name')->implode(' - ') }}</td>
				                    <td>
			                            <div class="d-flex">
			                                <a  class="btn btn-success"
			                                    href="{{ route('usuarios.edit', $user->id) }}"
			                                    >Editar
			                                </a>&nbsp;
			                                <form action="{{ route('usuarios.destroy', $user->id) }}"
			                                    method="post">
			                                    @csrf @method('DELETE')
			                                    <button class="btn btn-danger">Eliminar</button>
			                                </form>
			                            </div>
			                        </td>
				                </tr>
				            @endforeach
				        </tbody>
				    </table>
		    		<div class="overflow-auto">
                    	{{ $users->links() }}
                	</div>
                </div>
			</div>
{{-- 			<div class="d-flex justift-content-center align-items-center  justify-content-around">
	            <h1 class=" text-primary">Lista de usuarios</h1>
	            <a class="btn btn-primary pull-right d-block" href="{{ route('usuarios.create') }}">Nuevo</a>
	        </div> --}}

	    </div>
	</main>
@endsection