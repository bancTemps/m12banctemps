@extends('admin.layouts.modal')

{{-- Content --}}
@section('content')
	<!-- Tabs -->
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
		</ul>
	<!-- ./ tabs -->

	{{-- Create Category Form --}}
	<form class="form-horizontal" method="post" action="@if (isset($nom)){{ URL::to('admin/categories/' . $category->id . '/edit') }}@endif" autocomplete="off">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<!-- ./ csrf token -->

		<!-- Tabs Content -->
		<div class="tab-content">
			<!-- General tab -->
			<div class="tab-pane active" id="tab-general">
				<!-- username -->
				<div class="form-group {{{ $errors->has('username') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="username">Nom Categoria</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="nom" id="nom" value="{{{ Input::old('nom', isset($nom) ? $category->nom : null) }}}" />
						{{ $errors->first('nom', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
				<!-- ./ username -->

				<!-- Email -->
				<div class="form-group {{{ $errors->has('descripcio') ? 'error' : '' }}}">
					<label class="col-md-2 control-label" for="email">Descripcio</label>
					<div class="col-md-10">
						<input class="form-control" type="text" name="descripcio" id="descripcio" value="{{{ Input::old('descripcio', isset($nom) ? $category->descripcio : null) }}}" />
						{{ $errors->first('descripcio', '<span class="help-inline">:message</span>') }}
					</div>
				</div>
			</div>
			<!-- ./ general tab -->

		</div>
		<!-- ./ tabs content -->

		<!-- Form Actions -->
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<element class="btn-cancel close_popup">Cancel</element>
				<button type="reset" class="btn btn-default">Reset</button>
				<button type="submit" class="btn btn-success">OK</button>
			</div>
		</div>
		<!-- ./ form actions -->
	</form>
@stop
