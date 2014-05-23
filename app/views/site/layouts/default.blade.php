@extends('site.layouts.main')


@section('main') 

    @include('notifications')
    @yield('content')

@stop

@yield('scripts')