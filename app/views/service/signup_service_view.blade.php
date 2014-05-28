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
                <label for="nom">{{{ Lang::get('service.servicename') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('service.servicename') }}}" type="text" name="nom" id="servicename" value="{{{ Input::old('servicename') }}}">
                @if($errors->has('nom'))
                <div class="alert alert-error alert-danger">{{ $errors->first('nom') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">{{{ Lang::get('service.description') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('service.description') }}}" type="text" name="descripcio" id="description" value="{{{ Input::old('description') }}}">
                 @if($errors->has('descripcio'))
                <div class="alert alert-error alert-danger">{{ $errors->first('descripcio') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="dateI">{{{ Lang::get('service.date_start') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('service.date_start') }}}" type="date" name="dataInici" id="dateI">
                @if($errors->has('dataInici'))
                <div class="alert alert-error alert-danger">{{ $errors->first('dataInici') }}</div>
                @endif
            </div>
             <div class="form-group">
                <label for="dateF">{{{ Lang::get('service.date_finish') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('service.date_finish') }}}" type="date" name="dataFinal" id="dateF">
                @if($errors->has('dataFinal'))
                    <div class="alert alert-error alert-danger">{{ $errors->first('dataFinal') }}</div>
                @endif
             </div>
            <div class="form-group">
                <label for="duration">{{{ Lang::get('service.duration') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('service.duration') }}}" type="text" name="duracio" id="duration">
                @if($errors->has('duracio'))
                    <div class="alert alert-error alert-danger">{{ $errors->first('duracio') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="points">{{{ Lang::get('service.points') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('service.points') }}}" type="text" name="punts" id="points">
                @if($errors->has('punts'))
                    <div class="alert alert-error alert-danger">{{ $errors->first('punts') }}</div>
                @endif
            </div>
             <div class="form-group">
                <label for="provincias">Provincia</label>
                <div>{{Form::select('provincias',Provincia::lists('provincia','id_provincia'),null,['class' => 'droponsito'])}}</div>
            </div>
            <div class="form-group" id="municipios">
                
                
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <div>{{Form::select('categoria',Category::lists('nom','id'))}}</div>
            </div>
           
            <div class="form-actions form-group">
              <button type="submit" class="btn btn-primary">Crear nuevo servicio</button>
            </div>
            
            
            {{ Form::hidden('dataAvui', date('Y-m-d')) }}


        </fieldset>
    </form>
</div>
    </div>
@stop

{{--Script--}}

@section('scripts')
<script>
 jQuery( document ).ready( function( $ ) {
     
        $( '.droponsito' ).on( 'change', function() {
            

            
            $.get("{{URL::to('ajax')}}",{id_provincia: $( '.droponsito' ).val()})
                     .done(function( data ) {                         
                       $('#municipios').empty().append("<label id='borra' for='municipios'>Municipio:</label><br />"+data);
             });
            return false;
        } );
     
    } );
</script>
@stop
