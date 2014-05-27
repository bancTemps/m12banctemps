@extends('site.layouts.default')


@section('title')
{{ $service->nom  }} :: @parent
@stop

@section('styles')
@stop

{{-- Content --}}
@section('content')

    <div class="row" >        
        
        <!-- Columna del servicio -->
        <div class="col-md-offset-1 col-md-8 col-sm-8 col-xs-12" id="service">
            <!--  -->   
            <div class="row">
                 @include('notifications')
                <!-- Titulo del servicio -->
                <div class="page-header">
                    <h3><strong>{{ $service->nom  }}</strong></h3>
                </div>
            </div>

            <div class="row">

                <!-- Localizacion del servicio -->
                <div class="col-xs-12 col-sm-9 col-md-9">  
                    <div class="row">
                        <div id="mapas"></div>
                    </div>  
                </div>
           
            
            
            <!-- Datos del servicio -->
                <div class="col-xs-12 col-sm-3 col-md-3" id="service-data">
                    <br />
                    <p>Numero de veces solicitado:<b>{{ $solicitud->count() }}</b></p>
                    <p>Data d'inici: <b>{{ $service->dataInici }}</b></p>
                    <p>Data de fi: <b>{{ $service->dataFinal }}</b></p>
                    <p>Duració en hores: <b>{{ $service->duracio }}</b></p>
                    <p>Localització: <b>{{ $service->localitzacio }}</b></p>
                    <p>Punts: <b>{{ $service->punts }}</b></p>
                    <!--Solicitar servicio-->
                    <br /><br />  
                    
                    @if ($puedeSolicitar == true)     
                        <center><a class="button border-fade no-subrallado" href="/request/{{{$service->id}}}">Envia una sol·licitud</a>
                    @endif
                    

                        @if ( Session::get('solicitud') )
                            <div class="alert alert-success">{{ Session::get('solicitud') }}</div>
                        @endif
    
                    </center> 
                </div>
            </div>           
            
            <!-- Descripcion -->
            <p class="col-xs-7 col-sm-7 col-md-5">{{ $service->descripcio  }}</p>
            
            <!--Bloque de comentarios-->
            <div class="row">
                <br /><br/>
                <div class="col-md-12">
                @if ($comments->count())
                @foreach ($comments as $comment)
                <div class="row">
                        <div class="col-md-2 hidden-xs">
                                <img class="img-responsive" src="{{asset($comment->author->photo)}}" alt="">
                        </div>
                        <div class="col-md-10 col-xs-12">
                                <div class="row">
                                        <div class="col-md-10 col-xs-12">
                                            <span class="muted"><strong>{{{ $comment->author->username }}}</strong></span>
                                                &bull;
                                                {{{ $comment->date() }}}
                                        </div>

                                        <div class="col-md-10 hidden-xs">
                                                <hr />
                                        </div>

                                        <div class="col-md-10 col-xs-12">
                                                {{{ $comment->content() }}}
                                        </div>
                                </div>
                        </div>
                </div>
                <hr />
                @endforeach
                @else
                <hr />
                @endif

                @if ( ! Auth::check())
                You need to be logged in to add comments.<br /><br />
                Click <a href="{{{ URL::to('user/login') }}}">here</a> to login into your account.
                @elseif ( ! $canComment )
                    No tienes permisos para comentar en esta pagina.
                @else

                @if($errors->has())
                <div class="alert alert-danger alert-block">
                <ul>
                @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                @endforeach
                </ul>
                </div>
                @endif

                    <h4>Añadir comentario</h4>
                    <form  method="post" action="{{{ URL::to($service->url()) }}}">
                        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}" />
                        <div class="form-group">
                            <textarea class="col-xs-12 col-md-9 input-block-level" rows="4" name="comment" id="comment">{{{ Request::old('comment') }}}</textarea>
                            <div class="col-md-3 col-xs-12">
                                <p>Puntua el servei:</p>
                                <div class="col-md-12 hidden-xs">
                                    <span class="col-md-2 glyphicon glyphicon-star"></span>
                                    <span class="col-md-2 glyphicon glyphicon-star"></span>
                                    <span class="col-md-2 glyphicon glyphicon-star"></span>
                                    <span class="col-md-2 glyphicon glyphicon-star"></span>
                                    <span class="col-md-2 glyphicon glyphicon-star"></span>                                     
                                </div>
                                <div class="row">                                        
                                    <div class="row">
                                        
                                        <input class="col-md-12" type="range" name="points" min="0" max="10">
                                    </div>
                                    <div class="row" style="text-align:center">
                                        
                                        <input type="submit" class="button border-fade negrato" id="submit" value="Enviar" />
                                        
                                    </div>
                                </div>
                                <br /><br /><br />
                            </div>
                        </div>
                            
                    </form>
                @endif
                    
                </div>
                
                
            </div>
            
            
            
        </div>
        
        <!-- columna del usuario que ofrece el servicio -->
        <div class="col-md-3 col-sm-4 col-xs-12" id="profile-in-service">

            <div id="profile" class="col-xs-12 col-sm-4 col-md-3">
               <img src="{{ asset($service->author->photo) }}" title="avatar" class="hidden-xs col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"/>

                <div id="user-info" class="row col-xs-12 col-sm-12 col-md-12">
                    <p>Propietario del servicio</p>
                    <p><span class="embossed">Nombre:</span>{{ $service->author->name }}</p>
                    <p><span class="embossed">Email: </span>{{ $service->author->email }}</p>
                    <p><span class="embossed"><a class="button border-fade no-subrallado" href="{{URL::to('view/'.$service->author->username)}}">Perfil</a></span></p>
                </div>
                
                
            </div>               
        </div>
    </div>

@stop
