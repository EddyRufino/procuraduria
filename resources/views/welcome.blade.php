@extends('principal')

@section('content')
<div class="main">
    <div class="card text-white bg-danger mb-4 mt-4 ml-4" style="max-width: 18rem;">
        <div class="card-header">Importantes</div>
        <div class="card-body">
                        {{-- <p>{{ $i = $pendientes->first()->created_at }}</p>
                        <p>{{ $f = $pendientes->first()->fechaAudiencia }}</p>
                        <p>{{ $r = $i->diffInDays($f) }}</p>
                        @if ($r <= 4)
                            <a href="#" class="d-block text-white card-text text-center">{{ count([$r]) }}</a>
                        @endif --}}
            <h1 class="card-title display-4 text-center">{{ $pendientes->count() }}</h1>
            <a href="#" class="d-block text-white card-text text-center">Revisar</a>
        </div>
    </div>
    {{-- <p>{{ $pendientes->count() }}</p> --}}
    @foreach ($pendientes as $pendiente)

        <div class="row">
            <div class="card text-white bg-danger mb-4 mt-4 ml-4" style="max-width: 18rem;">
                <div class="card-header">Muy importantes</div>
                    <div class="card-body">
                        {{-- <h1 class="card-title display-4 text-center">
                            {{ $p = $pendiente->created_at->diffForHumans() }}
                        </h1>
                        @if ($p <= 2)
                            <a href="#" class="d-block text-white card-text text-center">{{ count([$p]) }}</a>
                        @endif --}}
                        <p>{{ $i = $pendiente->created_at }}</p>
                        <p>{{ $f = $pendiente->fechaAudiencia }}</p>
                        <p>{{ $r = $i->diffInDays($f) }}</p>
                        @if ($r <= 4)
                            <a href="#" class="d-block text-white card-text text-center">{{ count([$r]) }}</a>
                        @endif
                        <p>{{ $pendientes->count() }}</p>

                    </div>
            </div>

            <div class="card text-white bg-warning mb-4 mt-4 ml-4" style="max-width: 18rem;">
                <div class="card-header">Importantes</div>
                <div class="card-body">
                    <h1 class="card-title display-4 text-center">10</h1>
                    <a href="#" class="d-block text-white card-text text-center">Revisar</a>
                </div>
            </div>

            <div class="card text-white bg-success mb-4 mt-4 ml-4" style="max-width: 18rem;">
                <div class="card-header">Recien asignados</div>
                <div class="card-body">
                    <h1 class="card-title display-4 text-center">5</h1>
                    <a href="#" class="d-block text-white card-text text-center">Revisar</a>
                </div>
            </div>

        </div>

    @endforeach
</div>
@endsection
