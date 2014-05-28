@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Edit Service Form --}}
	<form class="form-horizontal" method="post" action="{{ URL::to('user/services/' . $servicio->id . '/editService') }}" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- username -->
				<div class="form-group {{{ $errors->has('nom') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="nom">Nombre del Servicio</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="nom" id="nom" value="{{ Input::old('nom', $servicio->nom) }}" />
						{{ $errors->first('nom', '<span class="help-inline">:message</span>') }}
					</div>
                              
				</div>
				<!-- ./ username -->

				<!-- Email -->
				<div class="form-group {{{ $errors->has('descripcio') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="descripcio">Descripcio</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="descripcio" id="descripcio" value="{{ Input::old('descripcio', $servicio->descripcio) }}" />
						{{ $errors->first('descripcio', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
                                 <div class="form-group {{{ $errors->has('duracio') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="duracio">Duracion</label>
					<div class="col-md-10">
						<input class="form-control" type="number" name="duracio" id="duracio" value="{{ Input::old('duracio', $servicio->duracio) }}" />
						{{ $errors->first('duracio', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
                                <div class="form-group {{{ $errors->has('punts') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="punts">Puntos</label>
					<div class="col-md-10">
						<input class="form-control" type="number" name="punts" id="punts" value="{{ Input::old('punts', $servicio->punts) }}" />
						{{ $errors->first('punts', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
                                
                                 <div class="form-group">
                                    <label for="categoria">Categoria</label>
                                 <div>{{Form::select('categoria',Category::lists('nom','id'))}}</div>
            </div>
			</div>

		<div class="form-group">
            <div class="col-md-offset-2 col-md-10">
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">Edit Service</button>
            </div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
