@extends('site.layouts.default')

@section('styles')
@parent
body {
    background: #f2f2f2;
}
@stop

{{-- Content --}}
@section('content')


    <div class="row" >
        <!-- Columna del srevicio -->
        <div class="col-md-9 col-sm-9 col-xs-12" id="service">
            
                <h2>{{ $service->nom  }}</h2>
                <h3>Descripcion del servicio : {{ $service->descripcio  }}</h3>

                

                <br/>
                <ul class="col-md-offset-1 col-md-6 col-sm-6 col-xs-12 cuadro-flotante embossed">
                    <li> Data d'inici: <b>{{ $service->dataInici }}</b></li>
                    <li> Data de fi: <b>{{ $service->dataFinal }}</b></li>
                    <li> Duració en hores: <b>{{ $service->duracio }}</b></li>
                    <li> Localització: <b>{{ $service->localitzacio }}</b></li>
                    <li> Punts: <b>{{ $service->punts }}</b></li>
                </ul>
   
                FALTAN MOSTRAR LAS VALORACIONES, WEBONSITOS
        </div>
        
        <!-- columna del usuario que ofrece el servicio -->
        <div class="col-md-3 col-sm-3 col-xs-12" id="profile-in-service">
            <center>
            <h3>Informacion del propietario del servicio</h3>
            <img src="{{ $service->author->photo }}" width="135px" height="135px" />
            <div id="user-info" class="embossed">
                <ul>
                    <li><b>{{ $service->author->name }}</b></li>
                    <li><b>{{ $service->author->surname }}</b></li>
                    <li>E-mail: <b>{{ $service->author->email }}</b></li>
                    <li>Tlf: <b>{{ $service->author->telephone }}</b></li>
                </ul>
            </div><br/>
            <input type="button" class="col-md-offset-1 btn-primary" value="Envia una sol·licitud"/></center>
        </div>
    </div>

@stop
