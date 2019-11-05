@extends('principal')

@section('content')
<main class="main">
    <div class="modal-body">
        <form action="{{ route('expedientes.store') }}" method="POST" class="form-horizontal">
        	@csrf
            <div class="form-group">
                <label class="col-md-3 form-control-label" for="text-input">Expediente:</label>
                <div class="col-md-9">
                    <input type="text" name="numExpediente"
                            class="form-control shadow-sm @error('numExpediente') is-invalid @else  @enderror"
                    		placeholder="Número de expediente" value="{{ old('numExpediente') }}">
                        @error('numExpediente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="text-input">N. Folios:</label>
                <div class="col-md-9">
                    <input type="number" name="folio"
                            class="form-control shadow-sm @error('folio') is-invalid @else  @enderror"
                            placeholder="Número de expediente" value="{{ old('folio') }}">
                        @error('folio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Materia:</label>
                <div class="col-md-9">
                    <select name="materia_id" id=""
                        class="form-control shadow-sm @error('materia_id') is-invalid @else  @enderror">
                        <option value="">Selecciona la materia</option>
                        @foreach ($materias as $materia)
                            <option value="{{ $materia->id }}">{{ $materia->nombreMateria }}</option>
                        @endforeach
                    </select>
                    @error('materia_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Juzgado:</label>
                <div class="col-md-9">
                    <select name="juzgado_id"
                        class="form-control shadow-sm @error('juzgado_id') is-invalid @else  @enderror">
                        <option value="">Selecciona el juzgado</option>
                        @foreach ($juzgados as $juzgado)
                            <option value="{{ $juzgado->id }}">{{ $juzgado->nombreJuzgado }}</option>
                        @endforeach
                    </select>
                    @error('juzgado_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Especialista:</label>
                <div class="col-md-9">
                    <input type="text" name="especialistaLegal"
                        class="form-control shadow-sm @error('especialistaLegal') is-invalid @else  @enderror"
                        placeholder="Nombre especialista legal" value="{{ old('especialistaLegal') }}">
                    @error('especialistaLegal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Demandante:</label>
                <div class="col-md-9">
                    <input type="text" name="demandante"
                    class="form-control shadow-sm @error('demandante') is-invalid @else  @enderror"
                    placeholder="Nombre demandate" value="{{ old('demandante') }}">
                    @error('demandante')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Demandado:</label>
                <div class="col-md-9">
                    <input type="text" name="demandado"
                    class="form-control shadow-sm @error('demandado') is-invalid @else  @enderror"
                    placeholder="Nombre demandado" value="{{ old('demandado') }}">
                    @error('demandado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Destinatario:</label>
                <div class="col-md-9">
                    <input type="text" name="destinatario"
                    class="form-control shadow-sm @error('destinatario') is-invalid @else  @enderror"
                    placeholder="Nombre destinatario" value="{{ old('destinatario') }}">
                    @error('destinatario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Dirección:</label>
                <div class="col-md-9">
                    <input type="text" name="direccion"
                    class="form-control shadow-sm @error('direccion') is-invalid @else  @enderror"
                    placeholder="Ingresa una dirección" value="{{ old('direccion') }}">
                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Fecha Apertura:</label>
                <div class="col-md-9">
	              <div class="input-group date">
	                <div class="input-group-addon">
	                  <i class="fa fa-calendar"></i>
	                </div>
	                <input name="fechaApertura"
	                    value=""
	                    type="text" class="form-control shadow-sm @error('fechaApertura') is-invalid @else  @enderror pull-right datepicker"
	                    id="datepicker">
                        @error('fechaApertura')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
	              </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Proceso:</label>
                <div class="col-md-9">
                    <select name="proceso_id"
                            class="form-control shadow-sm @error('proceso_id') is-invalid @else  @enderror">
                        <option value="">Selecciona el proceso</option>
                        @foreach ($procesos as $proceso)
                            <option value="{{ $proceso->id }}">{{ $proceso->nombreProceso }}</option>
                        @endforeach
                    </select>
                    @error('proceso_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="text-input">Acto:</label>
                <div class="col-md-9">
                    <input type="text" name="acto"
                            class="form-control shadow-sm @error('acto') is-invalid @else  @enderror"
                            placeholder="Número de expediente" value="{{ old('acto') }}">
                        @error('acto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Fecha Audiencia:</label>
                <div class="col-md-9">
	              <div class="input-group date">
	                <div class="input-group-addon">
	                  <i class="fa fa-calendar"></i>
	                </div>
	                <input name="fechaAudiencia"
	                    value=""
	                    type="text" class="form-control shadow-sm @error('fechaAudiencia') is-invalid @else  @enderror pull-right datepicker"
	                    id="datepicker2">
                    @error('fechaAudiencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
	              </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Abogado:</label>
                <div class="col-md-9">
                    <select name="user_id"
                        class="form-control shadow-sm @error('user_id') is-invalid @else  @enderror">
                        <option value="">Selecciona el abogado</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                                >
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group text-center">
            	<button class="btn btn-primary center">Guardar</button>
                <a class="btn btn-secondary" href="#">Cancelar</a>
            </div>
            </div>
        </form>
</main>
@endsection

@push('styles')
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">
@endpush


@push('scripts')
  <script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
  <script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
@endpush

<script>
	$('#datepicker').datepicker({
      autoclose: true
    });

    $('.select2').select2({
      tags: true
    });
</script>