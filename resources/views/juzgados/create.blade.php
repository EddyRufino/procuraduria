@extends('principal')

@section('content')
	<main class="main">
		<div class="modal-body">
			<form action="{{ route('juzgados.store') }}" method="POST" class="form-horizontal">
        	@csrf
	        	<div class="form-group">
	                <label class="col-md-3 form-control-label" for="text-input">Juzgado:</label>
	                <div class="col-md-9">
	                    <input type="text" name="nombreJuzgado"
	                            class="form-control shadow-sm @error('nombreJuzgado') is-invalid @else  @enderror"
	                    		placeholder="Nombre de la materia" value="{{ old('nombreJuzgado') }}">
	                        @error('nombreJuzgado')
	                            <span class="invalid-feedback" role="alert">
	                                <strong>{{ $message }}</strong>
	                            </span>
	                        @enderror
	                </div>
	                <br>
	                <div class="col-md-4 form-group">
	                	<button class="btn btn-primary">Enviar</button>
	                </div>
	            </div>
        	</form>
		</div>
	</main>
@endsection