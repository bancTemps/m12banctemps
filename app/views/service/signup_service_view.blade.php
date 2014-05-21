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
    <form method="POST" action="{{{ URL::to('service/create')  }}}" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <fieldset>
            <div class="form-group">
                <label for="servicename">{{{ Lang::get('confide::confide.servicename') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.servicename') }}}" type="text" name="servicename" id="servicename" value="{{{ Input::old('servicename') }}}">
            </div>
            <div class="form-group">
                <label for="description">{{{ Lang::get('confide::confide.description') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.description') }}}" type="text" name="description" id="description" value="{{{ Input::old('description') }}}">
            </div>
            <div class="form-group">
                <label for="dateI">{{{ Lang::get('confide::confide.dateI') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.dateI') }}}" type="date" name="dateI" id="dateI">
            </div>
             <div class="form-group">
                <label for="dateF">{{{ Lang::get('confide::confide.dateF') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.dateF') }}}" type="date" name="dateF" id="dateF">
            </div>
            <div class="form-group">
                <label for="duration">{{{ Lang::get('confide::confide.duration') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.duration') }}}" type="text" name="duration" id="duration">
            </div>
            <div class="form-group">
                <label for="points">{{{ Lang::get('confide::confide.points') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.points') }}}" type="text" name="points" id="points">
            </div>
            <div class="form-group">
                <label for="city">{{{ Lang::get('confide::confide.city') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.city') }}}" type="text" name="city" id="city" value="{{{ Input::old('city') }}}">
            </div>
            @if ( Session::get('error') )
                <div class="alert alert-error alert-danger">
                    @if ( is_array(Session::get('error')) )
                        {{ head(Session::get('error')) }}
                    @endif
                </div>
            @endif

            @if ( Session::get('notice') )
                <div class="alert">{{ Session::get('notice') }}</div>
            @endif

            <div class="form-actions form-group">
              <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
            </div>

        </fieldset>
    </form>
</div>
    </div>
@stop
