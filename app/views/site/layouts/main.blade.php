<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8" />

	<title>
		@section('title')
		Banc del temps
		@show
	</title>

	<meta name="keywords" content="your, awesome, keywords, here" />
	<meta name="author" content="Jon Doe" />
	<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
	
    <!-- Mobile Specific Metas================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	{{ HTML::style('bootstrap/css/bootstrap.min.css')}}
    {{ HTML::style('bootstrap/css/bootstrap-theme.min.css')}}
    {{ HTML::style('assets/css/hover.css')}}
    {{ HTML::style('assets/css/colorbox.css')}}
    {{ HTML::style('style.css')}}
    
    
    @yield('styles')

	  
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
	<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
</head>

<body>


<!-- To make sticky footer need to wrap in a div -->
<div id="wrap">

<!-- Navbar -->
<div class="navbar navbar-default navbar-inverse col-xs-12 col-sm-12 col-md-12">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ URL::to('') }}">
            <!--<img src="{{asset('img/logo-banc.png')}}" title="Logo">-->
                Banc del Temps
            </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav pull-right">
            <li><a href="{{ URL::to('service') }}"><span class="glyphicon glyphicon-time"></span> {{Lang::get('site.services')}}</a></li>
            
            
            @if (Auth::check())
                @if (Auth::user()->hasRole('admin'))

                    <li class="dropdown">
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
                            <span class="glyphicon glyphicon-list-alt"></span> Blog <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{{ URL::to('blog') }}}"><span class="glyphicon glyphicon-eye-open"></span> Ver Blog</a></li>
                            <li class="divider"></li>

                            <li><a href="{{{ URL::to('admin/blogs') }}}"><span class="glyphicon glyphicon-pencil"></span> Administrar Blog</a></li>
                            <li class="divider"></li>

                            <li><a href="{{{ URL::to('admin/comments') }}}"><span class="glyphicon glyphicon-bullhorn"></span> Comments</a></li>

                        </ul>   
                    </li>  

                    

                    <li class="dropdown{{ (Request::is('admin/users*|admin/roles*') ? ' active' : '') }}">
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
                            <span class="glyphicon glyphicon-user"></span> Users <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/users') }}}"><span class="glyphicon glyphicon-user"></span> Users</a></li>
                            <li class="divider"></li>

                            <li{{ (Request::is('admin/roles*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/roles') }}}"><span class="glyphicon glyphicon-user"></span> Roles</a></li>
                        </ul>   
                    </li>                

                @else
                    <li><a href="{{ URL::to('user/messages') }}"><span class="glyphicon glyphicon-comment"></span> {{Lang::get('site.messages')}}</a></li>

                @endif

                <!--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('user') }}}"><span class="glyphicon glyphicon-user"></span>{{{ Auth::user()->username }}}<span class="caret"></span></a>-->

                
                    <!--<ul class="dropdown-menu">-->

                        
                    <!-- </ul> -->

                @if (Auth::user()->hasRole('admin'))

                    <li><a href="{{ URL::to('admin') }}">{{Lang::get('site.admin_panel')}}</a></li>
                    <li class="divider"></li>

                @else

                    <li><a href="{{{ URL::to('user') }}}"><span class="glyphicon glyphicon-user"></span>{{Lang::get('site.profile')}}</a></li>
                    <li class="divider"></li>

                @endif

                <!--<li><a href="{{ URL::to('user/settings') }}"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                <li class="divider"></li>-->

                <li><a href="{{ URL::to('user/logout') }}"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                
            @else

                <li {{(Request::is('user/login') ? ' class="active"' : '') }}><a href="{{ URL::to('user/login') }}">Login</a></li>

                <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{ URL::to('user/create') }}">{{ Lang::get('Sign Up') }}</a></li>

            @endif
            </ul>
            <!-- ./ nav-collapse -->
        </div>
    </div>
</div>

<!--HUECO DE LA MISMA ALTURA QUE EL MENU-->
<div style="height: 50px;">
</div>
<!-- ./ navbar -->


@yield('main')


<div id="push"></div>

<div id="footer">
    <div class="container">
        <p class="muted credit">Banc del temps todas las perras reservadas.</p>
    </div>
</div>

</div>
<!-- ./wrap -->



<!-- Javascripts
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('assets/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables-bootstrap.js')}}"></script>
<script src="{{asset('assets/js/datatables.fnReloadAjax.js')}}"></script>
<script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
<script src="{{asset('assets/js/prettify.js')}}"></script>

@yield('scripts')

</body>
</html>
