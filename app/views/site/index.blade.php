@extends('site.layouts.default')
{{-- styles --}}
@section('styles')

@stop
{{-- Content --}}
@section('content')
    <div class="divopaco">
        <div class="form-group searchbox">
            <input type="text" class="searchbox form-control" placeholder="Busca persones o serveis a prop teu">
        </div>
    </div>
    <div id="mapas"></div>
    
    <!--Contenido-->
    <div class="container">
        <div class="row">
            <div class="col-md-12"><h2>Ultims serveis afegits:</h2></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <h3>Masajes asiaticos,</h3> imperdiet eu molestie ut, sagittis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed feugiat tortor. Integer lacus nibh, convallis sit amet augue eget, interdum aliquam sapien. Mauris vel nisi varius massa vestibulum ultricies eu sit amet <a href="#">ipsum.</a> 
            </div>
            <div class="col-lg-4 col-sm-12">
                <h3>Cocina asiatica,</h3> imperdiet eu molestie ut, sagittis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed feugiat tortor. Integer lacus nibh, convallis sit amet augue eget, interdum aliquam sapien. Mauris vel nisi varius massa vestibulum ultricies eu sit amet <a href="#">ipsum.</a> 
            </div>
            <div class="col-lg-4 col-sm-12">
                <h3>Taller de pollicultura,</h3> imperdiet eu molestie ut, sagittis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed feugiat tortor. Integer lacus nibh, convallis sit amet augue eget, interdum aliquam sapien. Mauris vel nisi varius massa vestibulum ultricies eu sit amet <a href="#">ipsum.</a> . 
            </div>
        </div>
        <div class="row">
            <h3>Morbi mi ligula,</h3> imperdiet eu molestie ut, sagittis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed feugiat tortor. Integer lacus nibh, convallis sit amet augue eget, interdum aliquam sapien. Mauris vel nisi varius massa vestibulum ultricies eu sit amet ipsum. 
            Morbi mi ligula, imperdiet eu molestie ut, sagittis eget libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi sed feugiat tortor. Integer lacus nibh, convallis sit amet augue eget, interdum aliquam sapien. Mauris vel nisi varius massa vestibulum ultricies eu sit amet ipsum. 
        </div>
        
    </div>
@stop
{{-- scripts --}}
@section('scripts')

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{asset('assets/js/gmaps.js')}}"></script>

@stop