@extends('site.layouts.user')


@section('menu-content')



<form class="form-horizontal" method="post" action="{{ URL::to('user/' . $user->id . '/edit') }}"  autocomplete="off">
    <!-- CSRF Token -->
    <div class="page-header">
        <h3 class="col-md-offset-3">Datos personales</h3>
    </div>

     <!-- Form Actions -->
    <div class="form-group">
        <div class="col-md-offset-2 col-md-1">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
        <div class="col-md-1">
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>        
    </div>
    <!-- ./ form actions -->
    
    
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="tab-pane active" id="tab-general">

        <!-- name -->
        <div class="form-group {{{ $errors->has('name') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="name">{{ Lang::get('messages.name') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="name" id="name" value="{{{ Input::old('name', $user->name) }}}" />
                {{ $errors->first('name', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ name -->

        <!-- surname -->
        <div class="form-group {{{ $errors->has('surname') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="surname">{{ Lang::get('messages.surname') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="surname" id="surname" value="{{{ Input::old('surname', $user->surname) }}}" />
                {{ $errors->first('surname', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ surname -->

        <!-- telephone -->
        <div class="form-group {{{ $errors->has('telephone') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="telephone">{{ Lang::get('messages.telephone') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="telephone" id="telephone" value="{{{ Input::old('telephone', $user->telephone) }}}" />
                {{ $errors->first('telephone', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ name -->

        <!-- address -->
        <div class="form-group {{{ $errors->has('address') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="address">{{ Lang::get('messages.address') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="address" id="address" value="{{{ Input::old('address', $user->address) }}}" />
                {{ $errors->first('address', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ address -->

        <!-- city -->
        <div class="form-group {{{ $errors->has('city') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="city">{{ Lang::get('messages.city') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="city" id="city" value="{{{ Input::old('city', $user->city) }}}" />
                {{ $errors->first('city', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ city -->

        <!-- postalCode -->
        <div class="form-group {{{ $errors->has('postalCode') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="postalCode">{{ Lang::get('messages.postal_code') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="postalCode" id="postalCode" value="{{{ Input::old('postalCode', $user->postalCode) }}}" />
                {{ $errors->first('postalCode', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ postalCode -->

        <div class="page-header">
            <h3 class="col-md-offset-3">Cuenta</h3>
        </div>

        <!-- Email -->
        <div class="form-group {{{ $errors->has('email') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="email">{{ Lang::get('messages.email') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="text" name="email" id="email" value="{{{ Input::old('email', $user->email) }}}" />
                {{ $errors->first('email', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ email -->

        <!-- Password -->
        <div class="form-group {{{ $errors->has('password') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="password">{{ Lang::get('messages.new_password') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="password" name="password" id="password" value="" />
                {{ $errors->first('password', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ password -->

        <!-- Password Confirm -->
        <div class="form-group {{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
            <label class="col-md-3 control-label" for="password_confirmation">{{ Lang::get('messages.password_confirm') }}</label>
            <div class="col-md-8">
                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" value="" />
                {{ $errors->first('password_confirmation', '<span class="help-inline">:message</span>') }}
            </div>
        </div>
        <!-- ./ password confirm -->
    </div>
    <!-- ./ general tab -->

   
</form>
</form>


@stop
