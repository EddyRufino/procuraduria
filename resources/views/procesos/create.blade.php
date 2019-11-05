@extends('principal')

@section('content')
	<main class="main">
		<div class="modal-body">
			<form action="{{ route('procesos.store') }}" method="POST" class="form-horizontal">
        	@csrf
	        	<div class="form-group">
	                <label class="col-md-3 form-control-label" for="text-input">Proceso:</label>
	                <div class="col-md-9">
	                    <input type="text" name="nombreProceso"
	                            class="form-control shadow-sm @error('nombreProceso') is-invalid @else  @enderror"
	                    		placeholder="Nombre de la materia" value="{{ old('nombreProceso') }}">
	                        @error('nombreProceso')
	                            <span class="invalid-feedback" role="alert">
	                                <strong>{{ $message }}</strong>
	                            </span>
	                        @enderror
	                </div>
	            </div>

	        	<div class="form-group">
	                <label class="col-md-3 form-control-label" for="text-input">Plazo:</label>
	                <div class="col-md-9">
	                    <input type="number" name="plazo"
	                            class="form-control shadow-sm @error('plazo') is-invalid @else  @enderror"
	                    		placeholder="Cantidad de días" value="{{ old('plazo') }}">
	                        @error('plazo')
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