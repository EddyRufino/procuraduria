@extends('principal')

@section('content')
	<main class="main">
		<div class="container mt-4 ">
			<div class="">
				<label class="text-muted">Nombre de expediente:</label>
				<div class="form-group ">
					<td>{{ $expediente->numExpediente }}</td>
				</div>
				<label class="text-muted">Número de folios:</label>
				<div class="form-group">
					<td>{{ $expediente->folio }}</td>
				</div>
				<label class="text-muted">Nombre de la materia:</label>
				<div class="form-group">
					<td>{{ $expediente->materia->nombreMateria }}</td>
				</div>
				<label class="text-muted">Nombre del juzgado:</label>
				<div class="form-group">
					<td>{{ $expediente->juzgado->nombreJuzgado }}</td>
				</div>
				<label class="text-muted">Nombre del especialista:</label>
				<div class="form-group">
					<td>{{ $expediente->especialistaLegal }}</td>
				</div>
			</div>

			<div class="">

				<label class="text-muted">Nombre del demandante:</label>
				<div class="form-group">
					<td>{{ $expediente->demandante }}</td>
				</div>
				<label class="text-muted">Nombre del demandado:</label>
				<div class="form-group">
					<td>{{ $expediente->demandado }}</td>
				</div>
				<label class="text-muted">Nombre del destinatario:</label>
				<div class="form-group">
					<td>{{ $expediente->destinatario }}</td>
				</div>
				<label class="text-muted">Nombre del direccion:</label>
				<div class="form-group">
					<td>{{ $expediente->direccion }}</td>
				</div>
				<label class="text-muted">Fecha de apertura:</label>
				<div class="form-group">
					<td>{{ $expediente->fechaApertura }}</td>
				</div>
				<label class="text-muted">Nombre del proceso:</label>
				<div class="form-group">
					<td>{{ $expediente->proceso->nombreProceso }}</td>
				</div>
				<label class="text-muted">Fecha de audiencia:</label>
				<div class="form-group">
					<td>{{ $expediente->fechaAudiencia }}</td>
				</div>
			</div>
			<div class="form-group">
				<a class="btn btn-primary" href="{{ route('expedientes.edit', $expediente->id) }}">Asignar</a>
			</div>
		</div>
	</main>
@endsection