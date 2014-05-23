@extends('site.layouts.main')


@section('main')
    <div id="user-menu" class="col-xs-12 col-sm-12 col-md-12 embossed">
        <div class="col-xs-12 col-sm-7 col-md-9" style="text-align: right;">
            <ul>
                <li><a href="{{{ URL::to('view/'.$user->username.'/service') }}}" title="services">Servicios</a></li>
                <li><a href="{{{ URL::to('user/account') }}}" title="account">Cuenta</a></li>            
                <li><a href="{{{ URL::to('user/friends') }}}" title="friends">Amigos</a></li>
                <li><a href="{{{ URL::to('user/statistics') }}}" title="statistics">Estadísticas</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div id="profile" class="col-xs-12 col-sm-offset-8 col-sm-4 col-md-offset-9 col-md-3">
           <img src="{{asset($user->photo) }}" title="avatar" class="hidden-xs col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"/>

            <div id="user-info" class="row col-xs-12 col-sm-12 col-md-12">
                <p>{{Input::old('name', $user->points) }}<span class="embossed"> pts</span></p>
                <p><span class="embossed">Nombre:</span> {{Input::old('name', $user->name) }} {{Input::old('surname', $user->surname) }}</p>
                <p><span class="embossed">Correo:</span> {{Input::old('email', $user->email) }}</p>
                <p><span class="embossed">Dirección:</span> {{Input::old('address', $user->address) }}, {{Input::old('city', $user->city) }}, {{Input::old('postalCode', $user->postalCode) }}</p>
                <p><span class="embossed">Teléfono:</span> {{Input::old('telephone', $user->telephone) }}</p>
            </div>
        </div>   

        <div id="menu-content" class="col-xs-12 col-sm-8 col-md-9">
             <!-- Notifications -->
            @include('notifications')
            <!-- ./ notifications -->
            
            @yield('menu-content')
        </div>

    </div>

@stop

@yield('scripts')
