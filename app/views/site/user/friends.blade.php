@extends('site.layouts.user')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.settings') }}} ::
@parent
@stop

{{-- New Laravel 4 Feature in use --}}
@section('styles')

@stop

@section('menu-content')    

     <?php
        for ($i=0 ; $i<40 ; $i++) {
            ?>
        <div class="message-friend col-xs-12 col-sm-3 col-md-3">
            <img class="cropper" src="http://img2.wikia.nocookie.net/__cb20140210145556/lovecraft/es/images/7/72/Lovecraft-cthulhu.jpg"/>
            <p>Cthulhu</p>
            <p><a href="#">Ver perfil</a></p>
            
        </div>
            <?php
        }
        ?>

@stop
