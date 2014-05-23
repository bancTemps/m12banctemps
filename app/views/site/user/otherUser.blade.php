@extends('site.layouts.default')

@section('content')
<div id="user-menu" class="col-xs-12 col-sm-12 col-md-12 embossed">
    <div class="col-xs-12 col-sm-offset-5 col-sm-7 col-md-offset-3 col-md-9">
        <ul>
            <li><a href="{{{ URL::to('view/'.$user->username.'/service') }}}" title="services">Servicios</a></li>
            <li><a href="{{{ URL::to('user/friends') }}}" title="friends">Amigos</a></li>
            <li><a href="{{{ URL::to('user/statistics') }}}" title="statistics">Estadísticas</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div id="profile" class="col-xs-12 col-sm-4 col-md-3">
       <img src="{{asset('img/avatar').'/'.Input::old('avatar', $user->avatar) }}" title="avatar" class="col-xs-offset-1 col-xs-3 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"/>
       <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div id="user-info" class="row col-xs-7 col-sm-12 col-md-12">
            <p></p>
            <p><span class="embossed">Nombre:</span> {{ $user->name }} {{Input::old('surname', $user->surname) }}</p>
            <p><span class="embossed">Correo:</span> {{ $user->email }}</p>
            <p><span class="embossed">Dirección:</span> {{Input::old('address', $user->address) }}</p>
        </div>
    </div>   

    <div id="menu-content" class="col-xs-12 col-sm-8 col-md-9">
        @yield('menu-content')
    </div>

    
</div>

@stop

