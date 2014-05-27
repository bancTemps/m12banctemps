@extends('site.layouts.otheruser')

@section('menu-content')
<form class="form-horizontal" method="POST" action="{{ URL::to('view/'.$user->username.'/report') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <div class="form-group">
            <div class="col-sm-offset-3 col-md-offset-4 col-md-10">
                El usuario : <b>{{ $reporter->username }}</b>
                <input type="hidden" name="reporter" id="reporter" value="{{ $reporter->id }}" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-md-offset-4 col-md-10">
                Denuncia a : <b>{{ $user->username }}</b>
                <input type="hidden" name="reported" id="reported" value="{{ $user->id }}" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-md-offset-4 col-md-10">
                Por estas razones:<br/>
                <textarea name="description" id="description" cols="80" rows="4"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-md-offset-4 col-md-10">
                <button tabindex="3" type="submit" class="btn btn-primary">Envia</button>
            </div>
        </div>
        
    </fieldset>
</form>
@stop
