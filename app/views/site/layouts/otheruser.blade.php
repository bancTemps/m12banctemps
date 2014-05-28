@extends('site.layouts.main')


@section('main')
    <div id="user-menu" class="col-xs-12 col-sm-12 col-md-12 embossed">
        <div class="col-xs-12 col-sm-7 col-md-9" style="text-align: right;">
            <ul>
                <li><a href="{{{ URL::to('view/'.$user->username.'/service') }}}" title="services">Servicios</a></li>
                <li><a href="{{{ URL::to('view/'.$user->username.'/report') }}}" title="report">Denunciar usuario</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div id="profile" class="col-xs-12 col-sm-offset-8 col-sm-4 col-md-offset-9 col-md-3">
           <img src="{{asset($user->photo) }}" title="avatar" class="hidden-xs col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"/>

            <div id="user-info" class="row col-xs-12 col-sm-12 col-md-12">
                <p></p>
                <p><span class="embossed">Nombre:</span> {{Input::old('name', $user->name) }} {{Input::old('surname', $user->surname) }}</p>
                
            </div>
        </div>   

        <div id="menu-content" class="col-xs-12 col-sm-8 col-md-9" style="float:left; padding-left: 5%;">

            @include('notifications')            
            @yield('menu-content')
        </div>

    </div>

@stop

@yield('scripts')
