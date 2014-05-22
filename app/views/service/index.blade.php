@extends('site.layouts.default')


{{-- styles --}}
@section('styles')
    {{ HTML::style('assets/css/ihover.css')}} 
@stop

{{-- Content --}}
@section('content')
    <div class="divopaco">
        <div class="form-group searchbox">
            {{ Form::open(array('url' => '/'))}}
                {{ Form::text('search', null, array('placeholder' => 'Busca persones o serveis a prop teu', 'class' => 'searchbox form-control')) }}      
            {{ Form::close() }}
        </div>
    </div>
    <div id="mapas"></div>
<div class="container">
    <div class="col-md-12">
        <div class="row">    
            @foreach ($services as $service)          
             <div class="col-md-4">
                <!-- normal -->
                <div class="ih-item square effect3 bottom_to_top">
                    <a href="{{ $service->url() }}">
                        <div class="img"><img class="img-responsive" src="http://placekitten.com/300/200" alt="img"></div>
                        <div class="info">
                          <h3>{{ $service->nom }}</h3>
                          <p>{{ $service->descripcio }}</p>
                        </div>
                    </a>
                </div>
                <!-- end normal -->
              </div>
            @endforeach
        </div>    
    </div>
</div>
@stop

{{-- scripts --}}
@section('scripts')
    {{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false'); }}
    {{ HTML::script('assets/js/gmaps.js'); }}

@stop
