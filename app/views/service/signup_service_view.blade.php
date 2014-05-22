@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>Registro</h1>
</div>

<div class="container">
    <div class="col-md-offset-2 col-md-6">
    <form method="POST" action="{{{ URL::to('user/services')  }}}" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <fieldset>
            <div class="form-group">
                <label for="nom">{{{ Lang::get('confide::confide.servicename') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.servicename') }}}" type="text" name="nom" id="servicename" value="{{{ Input::old('servicename') }}}">
                @if($errors->has('nom'))
                <div class="alert alert-error alert-danger">{{ $errors->first('nom') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">{{{ Lang::get('confide::confide.description') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.description') }}}" type="text" name="descripcio" id="description" value="{{{ Input::old('description') }}}">
                 @if($errors->has('descripcio'))
                <div class="alert alert-error alert-danger">{{ $errors->first('descripcio') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="dateI">{{{ Lang::get('confide::confide.dateI') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.dateI') }}}" type="date" name="dataInici" id="dateI">
                @if($errors->has('dataInici'))
                <div class="alert alert-error alert-danger">{{ $errors->first('dataInici') }}</div>
                @endif
            </div>
             <div class="form-group">
                <label for="dateF">{{{ Lang::get('confide::confide.dateF') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.dateF') }}}" type="date" name="dataFinal" id="dateF">
                @if($errors->has('dataFinal'))
                    <div class="alert alert-error alert-danger">{{ $errors->first('dataFinal') }}</div>
                @endif
             </div>
            <div class="form-group">
                <label for="duration">{{{ Lang::get('confide::confide.duration') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.duration') }}}" type="text" name="duracio" id="duration">
                @if($errors->has('duracio'))
                    <div class="alert alert-error alert-danger">{{ $errors->first('duracio') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="points">{{{ Lang::get('confide::confide.points') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.points') }}}" type="text" name="punts" id="points">
                @if($errors->has('punts'))
                    <div class="alert alert-error alert-danger">{{ $errors->first('punts') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="city">{{{ Lang::get('confide::confide.city') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.city') }}}" type="text" name="localitzacio" id="city" value="{{{ Input::old('city') }}}">
                @if($errors->has('localitzacio'))
                    <div class="alert alert-error alert-danger">{{ $errors->first('localitzacio') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <div>{{Form::select('categoria',Category::lists('nom','id'))}}</div>
            </div>
            <div class="form-actions form-group">
              <button type="submit" class="btn btn-primary">Crear nuevo servicio</button>
            </div>

        </fieldset>
    </form>
</div>
    </div>
@stop
