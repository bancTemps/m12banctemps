@extends('site.layouts.default')

@section('styles')

@stop

{{-- Content --}}
@section('content')


    <div class="row" >

        <!-- Columna del servicio -->
        <div class="col-md-offset-1 col-md-8 col-sm-8 col-xs-12" id="service">
            <!--  -->            
            <!-- Titulo del servicio -->
            <div class="page-header">
                <h3><strong>{{ $service->nom  }}</strong></h3>
            </div>

            <!-- Imagen del servicio + boton solicitud -->
            <div class="col-xs-5 col-sm-5 col-md-3">                
                <div class="col-sm-12 col-md-12">
                    <img class="img-responsive" src=" http://placecage.com/500/500" />
                </div>    

                <!-- Solicitar servicio -->
                <center><a class="button border-fade no-subrallado" href="#" class="col-xs-12">Envia una sol·licitud</a></center>       
                
            </div>
            
            <!-- Descripcion -->
            <p class="col-xs-7 col-sm-7 col-md-5">{{ $service->descripcio  }}</p>

            <!-- Datos del servicio -->
            <div class="col-xs-12 col-sm-12 col-md-4" id="service-data">
                <p>Data d'inici: <b>{{ $service->dataInici }}</b></p>
                <p>Data de fi: <b>{{ $service->dataFinal }}</b></p>
                <p>Duració en hores: <b>{{ $service->duracio }}</b></p>
                <p>Localització: <b>{{ $service->localitzacio }}</b></p>
                <p>Punts: <b>{{ $service->punts }}</b></p>
            </div>
   
        </div>
        
        <!-- columna del usuario que ofrece el servicio -->
        <div class="col-md-3 col-sm-4 col-xs-12" id="profile-in-service">

            <div id="profile" class="col-xs-12 col-sm-4 col-md-3">
               <img src="{{ $service->author->photo }}" title="avatar" class="col-xs-offset-1 col-xs-3 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6"/>

                <div id="user-info" class="row col-xs-7 col-sm-12 col-md-12">
                    <p>Propietario del servicio</p>
                    <p><span class="embossed">Nombre:</span>{{ $service->author->name }}</p>
                    <p><span class="embossed">Email: </span>{{ $service->author->email }}</p>
                </div>
                
                
            </div>               
        </div>
    </div>

@stop
