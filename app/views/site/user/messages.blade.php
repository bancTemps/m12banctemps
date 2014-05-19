@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.settings') }}} ::
@parent
@stop

{{-- New Laravel 4 Feature in use --}}
@section('styles')
@parent
body {
    background: #f2f2f2;
}
@stop

{{-- Content --}}
@section('content')

<div class="row">
    <div id="profile" class="col-xs-12 col-sm-4 col-md-3">
        <center>
            <img src="{{asset('img/avatar').'/'.Input::old('avatar', $user->avatar) }}" title="avatar" class="center" />
        </center>

        <div id="user-info" class="row col-xs-12 col-sm-12 col-md-12">
            <p>{{Input::old('name', $user->points) }}<span class="embossed"> pts</span></p>
            <p><span class="embossed">Nombre:</span> {{Input::old('name', $user->name) }}</p>
            <p><span class="embossed">Correo:</span> {{Input::old('email', $user->email) }}</p>
            <p><span class="embossed">Dirección:</span> {{Input::old('address', $user->address) }}</p>
        </div>
    </div>

    <div id="friends" class="col-xs-12 col-sm-offset-4 col-sm-3 col-md-offset-3 col-md-4">
        <?php
        for ($i=0 ; $i<40 ; $i++) {
            ?>
        <div class="message-friend col-xs-12 col-sm-12 col-md-12">
            <img class="cropper" src="http://img2.wikia.nocookie.net/__cb20140210145556/lovecraft/es/images/7/72/Lovecraft-cthulhu.jpg"/>
            <p>Cthulhu</p>
        </div>
            <?php
        }
        ?>
    </div>      

    <div id="messages" class="col-xs-12 col-sm-5 col-md-5">
        <div id="historial">
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, voluptatem, dolorum, ad nulla eos deleniti consectetur laboriosam eius harum quaerat totam vero non ducimus quia nihil amet id nemo officiis.</div>
            <div>Odio, dolor, autem dolores saepe eligendi possimus officiis soluta tempore quam quia asperiores adipisci atque inventore accusamus reiciendis ipsa officia vitae accusantium modi blanditiis excepturi delectus voluptate. Consectetur, repudiandae, excepturi.</div>
            <div>Iure, explicabo iste cupiditate. Molestiae, accusantium, velit consequuntur quidem rem sed illo culpa tempore ex ipsum provident voluptatum! Aperiam, nihil, hic vero architecto cumque impedit voluptas voluptatibus deserunt. Aliquid, corporis.</div>
            <div>Quae ipsam sunt cumque nam doloribus nisi et labore quibusdam recusandae laborum. Quia, enim, aliquid sit distinctio tempore tempora vel obcaecati dolorum laudantium consequuntur natus architecto dignissimos doloremque sequi recusandae.</div>
            <div>Iste, corrupti, reprehenderit, unde qui autem neque laboriosam consectetur deserunt blanditiis hic repudiandae saepe voluptatum libero temporibus dolor ut nesciunt cumque explicabo cupiditate necessitatibus. Est autem doloremque eius voluptatum quia.</div>
            <div>Minima, repudiandae, nostrum, corporis praesentium aliquid in eos earum sed ut magni nisi repellendus officiis perferendis voluptatibus vel sequi provident? Error, earum inventore fugit aspernatur quo dolores repudiandae molestiae in.</div>
            <div>Non, dolores quam illo cumque suscipit quo nemo architecto explicabo. Debitis, possimus, praesentium nostrum molestiae hic quo iure libero voluptates saepe obcaecati facilis eius. Nesciunt nemo laboriosam neque perferendis mollitia!</div>
            <div>Possimus, modi, quos, quidem enim maiores molestias rerum vero dolorum hic porro error quia accusantium illum laudantium molestiae eius assumenda laboriosam soluta voluptas impedit. Dolores magni perspiciatis qui dolorem nobis?</div>
            <div>Blanditiis, aliquid, numquam, officiis, porro doloribus in placeat fugiat odit at ullam dicta eos ipsam eaque corporis totam nostrum natus sequi laboriosam ipsum enim unde velit vitae delectus ducimus a.</div>
            <div>Tenetur, saepe minima sunt delectus alias quia molestiae est nulla eos quis pariatur consequuntur voluptatum libero tempora eligendi numquam doloremque nemo ea asperiores quasi laborum ipsa nihil hic repudiandae debitis!</div>
        </div>
        <input type="text" class="message-input-text" />
    </div>

</div><!--!ROW-->




<link href="{{asset('assets/css/scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('assets/js/scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script type="text/javascript">
    (function($){
        $(window).load(function(){
            $("#historial, #friends").mCustomScrollbar({
                scrollButtons:{
                    enable: true
                },
                theme:"dark-thick",
                scrollInertia: 200
            });
        });
    })(jQuery);
</script>


@stop
