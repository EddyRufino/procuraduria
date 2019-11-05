@extends('principal')

@section('content')
    <template v-if = "menu == 0">
        @include('home');
    </template>

    <template v-if = "menu == 1">
        {{-- @include('expedientes.create', ['materias' => 'materias']); --}}
    </template>

@endsection