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
        <h3>Canta con el divo paco</h3>
        <img src=" http://placecage.com/300/300" />
    </div>

    
    <div class="col-md-8">
        <div class="row">    
            @foreach ($services as $service)    
                        <div class="col-md-4">
                            <a href="{{{ $service->url() }}}" class="thumbnail">
                                <h4>{{$service->nom}}</h4>
                            </a>
                            <img src="http://placekitten.com/200/200" />
                        </div>

            @endforeach
        </div>    
    </div>
</div>
@stop

{{-- scripts --}}
@section('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{asset('assets/js/gmaps.js')}}"></script>

@stop
