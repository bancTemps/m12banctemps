@extends('site.layouts.user')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.settings') }}} ::
@parent
@stop

{{-- New Laravel 4 Feature in use --}}
@section('styles')


@stop

{{-- Content --}}
@section('menu-content')

<div class="row">
   

    <div id="friends" class="col-xs-12 col-sm-3 col-md-4">

        @if(sizeof($conversations) > 0)
            @foreach ($conversations as $conversation)
                <?php  $userModel = new User;
                    $friend = $userModel->getUserById($conversation->id_receptor)
                ?>        
                <div class="col-md-4">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <a href="#">
                            <div class="img"><img class="img-responsive" src="{{ asset($friend->photo)}}" alt="img"></div>
                            <div class="info">
                              <h3>{{ $friend->username }}</h3>
                              <p>{{ $friend->name }}</p>
                            </div>
                        </a>
                    </div>
                    <!-- end normal -->
                </div>
            @endforeach                    
        @endif
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

    setInterval(loadLog, 2500);    //Reload file every 2500 ms or x ms if you wish to change the second parameter

    $(document).ready(function(){
        $("#exit").click(function(){
            alertify.confirm("Seguro que quieres cerrar sesión? Est acción borrará la sala.", function (e) {
                if (e) {
                    window.location = '../index.php?logout=true';
                } 
            });
        });
    });

    $("#submitmsg").click(function(){   
        var clientmsg = $("#usermsg").val();
        // jquery post request: envia un valor post. 
        $.post("../controller/enviar_mensaje.php", {
            text: clientmsg
        });              
        $("#usermsg").attr("value", "");

        return false;
    });

    function loadLog(){     
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request

        $.ajax({
            type : 'POST',
            url : '../controller/imprimir_chat.php',
            success:function (data) {
                $("#chatbox").html(data);
                //Auto-scroll           
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }  
            }          
        }); 
    }

</script>


@stop
