@extends('principal')

@section('content')
    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="container-fluid">
            <!-- Ejemplo de tabla Listado -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Categorías
                    <button type="button"  class="btn btn-secondary">
                        <a href="{{ route('expedientes.create') }}"><i class="icon-plus"></i>&nbsp;Nuevo</a>
                    </button>
                </div>
                <div class="card-body overflow-auto">
                    <div class="form-group">
                        <form method="GET" action="{{ route('expedientes.buscarp') }}">
                            <div class="col-md-6">
                                <div class="input-group">

                                    <select class="form-control col-md-3" name="selectp">
                                        <option>Elige</option>
                                        @foreach ($juzgados as $juzgado)
                                            <option value="{{ $juzgado->id }}"
                                                >
                                                {{ $juzgado->nombreJuzgado }}
                                            </option>
                                        @endforeach
                                    </select>


                                    {{-- <input name="search" class="form-control" placeholder="Texto a buscar"> --}}
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <ul class="list-group">

                    @forelse ($pendientes as $expediente)
                        <li class="list-group-item border-0 mb-3 shadow-sm">
                            <a class="text-secondary d-flex justify-content-between align-items-center"
                                href="{{ route('expedientes.show', $expediente) }}"
                                >
                                <span class=" font-weight-bold"
                                    >
                                    {{ $expediente->numExpediente }}
                                </span>
                                <span>
                                    {{ $expediente->juzgado->nombreJuzgado }}
                                </span>
                                <span class="text-black-50"
                                    >
                                    Plazo
                                    {{ $expediente->proceso->plazo }} días
                                </span>
                                <span class="text-black-50"
                                    >
                                    y han pasado
                                    {{ $expediente->created_at->diffForHumans() }}
                                </span>
                                {{-- <span class="text-black-50"
                                    > Tienes
                                    {{ $expediente->proceso->plazo }} días
                                </span> --}}
                                <span class="text-black-50"
                                    >
                                    Audiencia
                                    {{ $expediente->fechaAudiencia }}
                                </span>
                            </a>
                        </li>

                    @empty
                        <li class="list-group-item border-0 mb-3 shadow-sm">No hay nada para mostrar</li>
                    @endforelse
                    <div class="overflow-auto">
                        {{ $pendientes->links() }}
                    </div>
                </div>
            </div>
            <!-- Fin ejemplo de tabla Listado -->
        </div>
    </main>
@endsection