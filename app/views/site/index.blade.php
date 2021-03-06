@extends('site.layouts.default')
{{-- styles --}}

@section('styles')

@stop
{{-- Content --}}
@section('content')
    <div class="divopaco">
        <div class="form-group searchbox">
            {{ Form::open(array('url' => '/'))}}
                {{ Form::text('search', null, array('placeholder' => 'Busca persones o serveis a prop teu', 'class' => 'searchbox form-control')) }}      
                {{ Form::select('category', $categories) }}
            {{ Form::close() }}
        </div>
    </div>
    <div id="mapas"></div>
    
    <!--Contenido-->
    <div class="container">
        <div class="row">
            <h2>Qui som,</h2> imperdiet eu molestie ut, sagittis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed feugiat tortor. Integer lacus nibh, convallis sit amet augue eget, interdum aliquam sapien. Mauris vel nisi varius massa vestibulum ultricies eu sit amet ipsum. 
            Morbi mi ligula, imperdiet eu molestie ut, sagittis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed feugiat tortor. Integer lacus nibh, convallis sit amet augue eget, interdum aliquam sapien. Mauris vel nisi varius massa vestibulum ultricies eu sit amet ipsum. 
        </div>
        
        
        
        <div class="row">
            <div class="col-md-12"><h2>Ultims serveis afegits:</h2></div>
        </div>        
        <div class="row">
         @foreach ($services as $service)
                <div class="col-lg-4 col-sm-12">
                    <h3>{{ $service->nom }},</h3> 
                    <p>{{ $service->descripcio }}</p>                
                    <a href="{{ $service->url() }}">Ver servicio ->.</a> 
                </div>                        
         @endforeach
         </div>
        
        
    </div>
@stop

