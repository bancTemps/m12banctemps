@extends('site.layouts.default')

@section('content')
    <div class="divopaco">
        <div class="form-group searchbox">
            {{ Form::open(array('url' => '/'))}}
                {{ Form::text('search', null, array('placeholder' => 'Busca persones o serveis a prop teu', 'class' => 'searchbox form-control')) }}      
            {{ Form::close() }}
        </div>
    </div>
    <div id="mapas"></div>
    
    <!--Contenido-->
    <div class="container">
        <div class="page-header">
            <h2>Serveis </h2>
        </div>
        
        
        
        <div class="col-md-12">
            <div class="row"> 
                <h3>Resultados de la búsqueda: <strong>{{$search}}</strong></h3>  

                @if(sizeof($services) > 0)
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
                @else
                    <p>No existe un servicio con ese nombre</p>
                @endif

                @if(sizeof($users) > 0)
                    <h3>Resultados de la búsqueda: <strong>{{$search}}</strong></h3>
                    @foreach ($users as $user)          
                        <div class="col-md-4">
                            <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <a href="{{ $user->username }}">
                                    <div class="img"><img class="img-responsive" src="http://placekitten.com/300/200" alt="img"></div>
                                    <div class="info">
                                      <h3>{{ $user->username }}</h3>
                                      <p>{{ $user->points }}</p>
                                    </div>
                                </a>
                            </div>
                        <!-- end normal -->
                        </div>
                    @endforeach
                @else
                    <p>No existe un usuario con ese nombre</p>
                @endif
            </div>    
        </div>
        
    </div>
    
@stop