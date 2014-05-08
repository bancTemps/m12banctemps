@extends('site.layouts.default')
{{-- styles --}}
@section('styles')

@stop
{{-- Content --}}
@section('content')
    <div id="mapas"  style="height: 300px;></div>
    
@stop
{{-- scripts --}}
@section('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{asset('assets/js/gmaps.js')}}"></script>

@stop