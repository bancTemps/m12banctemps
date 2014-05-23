@extends('site.layouts.main')


@section('main')   

    <div id="user-menu" class="col-xs-12 col-sm-12 col-md-12 embossed">
        <div class="col-xs-12 col-sm-offset-5 col-sm-7 col-md-offset-3 col-md-9">
            <ul>
                <li><a href="{{{ URL::to('admin/statistics') }}}" title="statistics">Estadísticas</a></li>
            <li>Denuncias</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div id="profile" class="col-xs-12 col-sm-4 col-md-3">
           <img src="{{asset($user->photo) }}" title="avatar" class="hidden-xs col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"/>

            <div id="user-info" class="row col-xs-12 col-sm-12 col-md-12">
                <p></p>
                <p><span class="embossed">Nombre:</span> {{Input::old('name', $user->name) }}</p>
                <p><span class="embossed">Correo:</span> {{Input::old('email', $user->email) }}</p>
                <p><span class="embossed">Dirección:</span> {{Input::old('address', $user->address) }}</p>
            </div>
        </div>   

        <div id="menu-content" class="col-xs-12 col-sm-8 col-md-9">
             <!-- Notifications -->
            @include('notifications')
            <!-- ./ notifications -->
            
            @yield('menu-content')
        </div>

    </div><!--!ROW-->

@stop

@yield('scripts')