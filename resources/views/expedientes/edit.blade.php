@extends('principal')

@section('content')
	<main class="main">
		<div class="container">
			<form method="POST" action="{{ route('expedientes.update', $expediente) }}"  class="form-horizontal">
        	@csrf @method('PUT')

        	<div class="form-group">
                <label class="col-md-3 form-control-label" for="email-input">Abogado:</label>
                <div class="col-md-9">
                    <select name="user_id"
                        class="form-control shadow-sm @error('user_id') is-invalid @else  @enderror">
                        <option value="">Selecciona el abogado</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                            	{{ old('user_id', $expediente->user_id) == $user->id ? 'selected' : '' }}
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

            <div class="form-group d-none">
                <label class="col-md-3 form-control-label" for="text-input">Expediente:</label>
                <div class="col-md-9">
                    <input type="text" name="numExpediente"
                            class=" form-control shadow-sm @error('numExpediente') is-invalid @else  @enderror"
                    		placeholder="Número de expediente"
                    		value="{{ old('numExpediente', $expediente->numExpediente) }}">
                        @error('numExpediente')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="text-input">N. Folios:</label>
                <div class="col-md-9">
                    <input type="number" name="folio"
                            class="d-none form-control shadow-sm @error('folio') is-invalid @else  @enderror"
                            placeholder="Número de expediente"
                            value="{{ old('folio', $expediente->folio) }}">
                        @error('folio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Materia:</label>
                <div class="col-md-9">
                    <select name="materia_id" id=""
                        class="d-none form-control shadow-sm @error('materia_id') is-invalid @else  @enderror">
                        <option value="">Selecciona la materia</option>
                        @foreach ($materias as $materia)
                            <option value="{{ $materia->id }}"
                            	{{ old('materia_id', $expediente->materia_id) == $materia->id ? 'selected' : '' }}
                            	>
                            	{{ $materia->nombreMateria }}
                            </option>
                        @endforeach
                    </select>
                    @error('materia_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Juzgado:</label>
                <div class="col-md-9">
                    <select name="juzgado_id"
                        class="d-none form-control shadow-sm @error('juzgado_id') is-invalid @else  @enderror">
                        <option value="">Selecciona el juzgado</option>
                        @foreach ($juzgados as $juzgado)
                            <option value="{{ $juzgado->id }}"
                            	{{ old('juzgado_id', $expediente->juzgado_id) == $juzgado->id ? 'selected' : '' }}
                            	>
                            	{{ $juzgado->nombreJuzgado }}
                            </option>
                        @endforeach
                    </select>
                    @error('juzgado_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Especialista:</label>
                <div class="col-md-9">
                    <input type="text" name="especialistaLegal"
                        class="d-none form-control shadow-sm @error('especialistaLegal') is-invalid @else  @enderror"
                        placeholder="Nombre especialista legal"
                        value="{{ old('especialistaLegal', $expediente->especialistaLegal) }}">
                    @error('especialistaLegal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Demandante:</label>
                <div class="col-md-9">
                    <input type="text" name="demandante"
                    class="d-none form-control shadow-sm @error('demandante') is-invalid @else  @enderror"
                    placeholder="Nombre demandate"
                    value="{{ old('demandante', $expediente->demandante) }}">
                    @error('demandante')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Demandado:</label>
                <div class="col-md-9">
                    <input type="text" name="demandado"
                    class="d-none form-control shadow-sm @error('demandado') is-invalid @else  @enderror"
                    placeholder="Nombre demandado"
                    value="{{ old('demandado', $expediente->demandado) }}">
                    @error('demandado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Destinatario:</label>
                <div class="col-md-9">
                    <input type="text" name="destinatario"
                    class="d-none form-control shadow-sm @error('destinatario') is-invalid @else  @enderror"
                    placeholder="Nombre destinatario"
                    value="{{ old('destinatario', $expediente->destinatario) }}">
                    @error('destinatario')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Dirección:</label>
                <div class="col-md-9">
                    <input type="text" name="direccion"
                    class="d-none form-control shadow-sm @error('direccion') is-invalid @else  @enderror"
                    placeholder="Ingresa una dirección"
                    value="{{ old('direccion', $expediente->direccion) }}">
                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Fecha Apertura:</label>
                <div class="col-md-9">
	              <div class="input-group date">
	                <div class="input-group-addon">
	                  <i class="fa fa-calendar"></i>
	                </div>
	                <input name="fechaApertura"
	                    value="{{ old('fechaApertura', $expediente->fechaApertura ? $expediente->fechaApertura : null) }}"
	                    type="text" class="d-none form-control shadow-sm @error('fechaApertura') is-invalid @else  @enderror pull-right datepicker"
	                    id="datepicker">
                        @error('fechaApertura')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
	              </div>
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Proceso:</label>
                <div class="col-md-9">
                    <select name="proceso_id"
                            class="d-none form-control shadow-sm @error('proceso_id') is-invalid @else  @enderror">
                        <option value="">Selecciona el proceso</option>
                        @foreach ($procesos as $proceso)
                            <option value="{{ $proceso->id }}"
                            	{{ old('proceso_id', $expediente->proceso_id) == $proceso->id ? 'selected' : '' }}
                            	>
                            	{{ $proceso->nombreProceso }}
                            </option>
                        @endforeach
                    </select>
                    @error('proceso_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="text-input">Acto:</label>
                <div class="col-md-9">
                    <input type="text" name="acto"
                            class="d-none form-control shadow-sm @error('acto') is-invalid @else  @enderror"
                            placeholder="Número de expediente"
                            value="{{ old('acto', $expediente->acto) }}">
                        @error('acto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="form-group d-none">
                <label class="d-none col-md-3 form-control-label" for="email-input">Fecha Audiencia:</label>
                <div class="col-md-9">
	              <div class="input-group date">
	                <div class="input-group-addon">
	                  <i class="fa fa-calendar"></i>
	                </div>
	                <input name="fechaAudiencia"
	                    value="{{ old('fechaAudiencia', $expediente->fechaAudiencia ? $expediente->fechaAudiencia : null) }}"
	                    type="text" class="d-none form-control shadow-sm @error('fechaAudiencia') is-invalid @else  @enderror pull-right datepicker"
	                    id="datepicker2">
                    @error('fechaAudiencia')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
	              </div>
                </div>
            </div>
            <div class="form-group text-center">
            	<button class="btn btn-primary center">Guardar</button>
                <a class="btn btn-secondary" href="#">Cancelar</a>
            </div>
            </div>
        </form>
		</div>
	</main>
@endsection