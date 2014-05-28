@extends('site.layouts.user')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.settings') }}} ::
@parent
@stop

{{-- New Laravel 4 Feature in use --}}
@section('styles')
<style>
#followingBallsG{
position:relative;
width:256px;
height:20px;
}

.followingBallsG{
background-color:#E0E0E0;
position:absolute;
top:50px;
left:0;
width:20px;
height:20px;
-moz-border-radius:10px;
-moz-animation-name:bounce_followingBallsG;
-moz-animation-duration:2.7s;
-moz-animation-iteration-count:infinite;
-moz-animation-direction:linear;
-webkit-border-radius:10px;
-webkit-animation-name:bounce_followingBallsG;
-webkit-animation-duration:2.7s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:linear;
-ms-border-radius:10px;
-ms-animation-name:bounce_followingBallsG;
-ms-animation-duration:2.7s;
-ms-animation-iteration-count:infinite;
-ms-animation-direction:linear;
-o-border-radius:10px;
-o-animation-name:bounce_followingBallsG;
-o-animation-duration:2.7s;
-o-animation-iteration-count:infinite;
-o-animation-direction:linear;
border-radius:10px;
animation-name:bounce_followingBallsG;
animation-duration:2.7s;
animation-iteration-count:infinite;
animation-direction:linear;
}

#followingBallsG_1{
-moz-animation-delay:0s;
}

#followingBallsG_1{
-webkit-animation-delay:0s;
}

#followingBallsG_1{
-ms-animation-delay:0s;
}

#followingBallsG_1{
-o-animation-delay:0s;
}

#followingBallsG_1{
animation-delay:0s;
}

#followingBallsG_2{
-moz-animation-delay:0.27s;
-webkit-animation-delay:0.27s;
-ms-animation-delay:0.27s;
-o-animation-delay:0.27s;
animation-delay:0.27s;
}

#followingBallsG_3{
-moz-animation-delay:0.54s;
-webkit-animation-delay:0.54s;
-ms-animation-delay:0.54s;
-o-animation-delay:0.54s;
animation-delay:0.54s;
}

#followingBallsG_4{
-moz-animation-delay:0.81s;
-webkit-animation-delay:0.81s;
-ms-animation-delay:0.81s;
-o-animation-delay:0.81s;
animation-delay:0.81s;
}

@-moz-keyframes bounce_followingBallsG{
0%{
left:0px;
background-color:#E0E0E0;
}

50%{
left:236px;
background-color:#F0563D;
}

100%{
left:0px;
background-color:#E0E0E0;
}

}

@-webkit-keyframes bounce_followingBallsG{
0%{
left:0px;
background-color:#E0E0E0;
}

50%{
left:236px;
background-color:#F0563D;
}

100%{
left:0px;
background-color:#E0E0E0;
}

}

@-ms-keyframes bounce_followingBallsG{
0%{
left:0px;
background-color:#E0E0E0;
}

50%{
left:236px;
background-color:#F0563D;
}

100%{
left:0px;
background-color:#E0E0E0;
}

}

@-o-keyframes bounce_followingBallsG{
0%{
left:0px;
background-color:#E0E0E0;
}

50%{
left:236px;
background-color:#F0563D;
}

100%{
left:0px;
background-color:#E0E0E0;
}

}

@keyframes bounce_followingBallsG{
0%{
left:0px;
background-color:#E0E0E0;
}

50%{
left:236px;
background-color:#F0563D;
}

100%{
left:0px;
background-color:#E0E0E0;
}

}

</style>

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
                <div class="col-xs-6 col-md-4">
                    <!-- normal -->
                    <div class="ih-item square effect3 bottom_to_top">
                        <a href="{{ URL::to('user/messages/'.$conversation->id) }}">
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
        <div id="chatbox">
            <center>
                <div id="followingBallsG">
                    <div id="followingBallsG_1" class="followingBallsG">
                    </div>
                    <div id="followingBallsG_2" class="followingBallsG">
                    </div>
                    <div id="followingBallsG_3" class="followingBallsG">
                    </div>
                    <div id="followingBallsG_4" class="followingBallsG">
                    </div>
                </div>
            </center>
            
        </div>
        <input type="text" id="message-input-text" value=""/>
    </div>

</div><!--!ROW-->




<link href="{{asset('assets/css/scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('assets/js/scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script type="text/javascript">
    setInterval(loadLog, 100);    //Reload file every 2500 ms or x ms if you wish to change the second parameter
    //loadLog();

    $("#message-input-text").keypress(function(e) {
        if (e.which == 13) {
            enviarComentari();
        }
    });

    function enviarComentari() {
        var oldscrollHeight = $("#chatbox").prop("scrollHeight") - 20;
        var comentari = $("#message-input-text").val();
        var conversationID = getIdFromUrl();
        // jquery post request: envia un valor post. 

        if (comentari != "") {
            $.get("{{ URL::to('user/newmessage/') }}"+"/"+conversationID + "/"+  escape(comentari), function(data){
                $("#message-input-text").val("");
                var newscrollHeight = $("#chatbox").prop("scrollHeight") + 20;
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
            });
        }     
    }

    function loadLog(){ 
        //var oldscrollHeight = $("#chatbox").prop("scrollHeight") - 20; //Scroll height before the request        

        // getIdFromUrl(document.URL) para conseguir la id de la conversacion actual
        $.get("{{ URL::to('user/messagelist/') }}"+"/"+getIdFromUrl(), function(data){
            $("#chatbox").html(data);
             //Auto-scroll           
            //var newscrollHeight = $("#chatbox").prop("scrollHeight") + 20;
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
        });
            
    }

    function getIdFromUrl() {
        url = document.URL;
        urlArray = url.split("/");
        return(urlArray[urlArray.length-1]);
    }

</script>


@stop
