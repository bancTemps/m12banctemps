@extends('site.layouts.main')


@section('main')
    <div class="container">

        @include('notifications')

    	@yield('content')

    </div>
@stop


@yield('scripts')