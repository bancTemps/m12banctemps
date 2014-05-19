@extends('site.layouts.default')

@section('styles')
@parent
body {
    background: #f2f2f2;
}
@stop

{{-- Content --}}
@section('content')
    <div class="divopaco">
        <div class="form-group searchbox">
            <input type="text" class="searchbox form-control" placeholder="Busca persones o serveis a prop teu">
        </div>
    </div>
    <div id="mapas"></div>
<div class="container">
    <div class="col-md-4">
        <h3>Servicio Destacado</h3>
        <img src=" http://placecage.com/300/300" />
    </div>
    <div class="col-md-8">
        <div class="row">
        
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
                Servicio 2            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200" />
            </div>
        </div>
    </div>
    
</div>

@stop

{{-- scripts --}}
@section('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{asset('assets/js/gmaps.js')}}"></script>

@stop
