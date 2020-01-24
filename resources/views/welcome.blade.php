@extends('principal')

@section('content')
<div class="main">
    <div class="card text-white bg-danger mb-4 mt-4 ml-4" style="max-width: 18rem;">
        <div class="card-header">Total de casos</div>
        <div class="card-body">
                        {{-- <p>{{ $i = $pendientes->first()->created_at }}</p>
                        <p>{{ $f = $pendientes->first()->fechaAudiencia }}</p>
                        <p>{{ $r = $i->diffInDays($f) }}</p>
                        @if ($r <= 4)
                            <a href="#" class="d-block text-white card-text text-center">{{ count([$r]) }}</a>
                        @endif --}}
                        {{-- {{dd($pendientes->created_at->subDays(3))}} --}}
            <h1 class="card-title display-4 text-center">{{ $pendientes->count() }}</h1>
            <a href="#" class="d-block text-white card-text text-center">Revisar</a>
        </div>
    </div>

    <h2 class="card-header ml-4">Lista de casos por vencer</h2>

    @forelse ($pendientes as $pendiente)
    <br>
        <p class="d-none">{{ $inicio = (Carbon\Carbon::today())->subDays(2) }} - inicio</p>
        {{-- <p>{{ $f = $pendiente->fechaAudiencia }}</p> --}}
        <p class="d-none">{{ $final = Carbon\Carbon::parse($pendiente->fechaAudiencia)->subDays(2) }} - final</p>

        {{-- <p class="d-none">{{ $inicioI = (Carbon\Carbon::today())->subDays(5) }} - inicio</p>
        <p class="d-none">{{ $FinalI = Carbon\Carbon::parse($pendiente->fechaAudiencia)->subDays(5) }} - final</p> --}}

        @if ($inicio == $final)
            <a class="ml-4 btn btn-danger" href="{{ route('expedientes.show', $pendiente->id) }}">{{ $pendiente->numExpediente }}</a><br>
        @endif

        {{-- @if ($inicioI == $FinalI)
            <a class="btn btn-warning" href="{{ route('expedientes.show', $pendiente->id) }}">{{ $pendiente->numExpediente }}</a><br>
        @endif --}}
        @empty
        <p class="card-header ml-4">No hay casos por vencer</li>
    @endforelse

</div>
@endsection