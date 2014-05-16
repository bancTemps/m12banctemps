@extends('site.layouts.default')

@section('styles')
@parent
body {
    background: #f2f2f2;
}
@stop

{{-- Content --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            Servicio 1
        </div>
        <div class="col-md-4">
            Servicio 2
        </div>
        <div class="col-md-4">
            Servicio 3
        </div>
    </div>
    
</div>

@stop