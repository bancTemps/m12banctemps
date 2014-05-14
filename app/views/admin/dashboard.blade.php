<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta charset="utf-8" />
	<title>
		@section('title')
			Administration
		@show
	</title>

	<meta name="keywords" content="@yield('keywords')" />
	<meta name="author" content="@yield('author')" />
	<meta name="description" content="@yield('description')" />
	<meta name="google-site-verification" content="">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="@yield('description')">
	<meta name="DC.creator" content="@yield('author')">

	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- This is the traditional favicon.
	 - size: 16x16 or 32x32
	 - transparency is OK
	 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
	<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">

	<!-- iOS favicons. -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
	<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

	<!-- CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/wysihtml5/prettify.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/wysihtml5/bootstrap-wysihtml5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/datatables-bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/colorbox.css')}}">

    <link rel="stylesheet" href="{{asset('style.css')}}">

    

	@yield('styles')

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

<div id="wrap">
	
<!-- Navbar -->
<div class="navbar navbar-default navbar-inverse col-xs-12 col-sm-12 col-md-12">
	<div class="container">
        <div class="navbar-header">
			<a href="{{{ URL::to('') }}}">
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

			<!--<ul class="nav navbar-nav" style="margin-left: 20px;">
				<li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin') }}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs') }}}"><span class="glyphicon glyphicon-list-alt"></span> Blog</a></li>
				<li{{ (Request::is('admin/comments*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/comments') }}}"><span class="glyphicon glyphicon-bullhorn"></span> Comments</a></li>
				<li class="dropdown{{ (Request::is('admin/users*|admin/roles*') ? ' active' : '') }}">
					<a class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
						<span class="glyphicon glyphicon-user"></span> Users <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/users') }}}"><span class="glyphicon glyphicon-user"></span> Users</a></li>
						<li{{ (Request::is('admin/roles*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/roles') }}}"><span class="glyphicon glyphicon-user"></span> Roles</a></li>
					</ul>
				</li>
			</ul>-->
			<ul class="nav navbar-nav pull-right">
				<!--<li><a href="{{{ URL::to('/') }}}">View Homepage</a></li>-->
				<li{{ (Request::is('admin/blogs*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/blogs') }}}"><span class="glyphicon glyphicon-list-alt"></span> Blog</a></li>
				<li{{ (Request::is('admin/comments*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/comments') }}}"><span class="glyphicon glyphicon-bullhorn"></span> Comments</a></li>
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
				<li class="divider-vertical"></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-user"></span> {{{ Auth::user()->username }}}	<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{{ URL::to('admin') }}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="divider"></li>

						<li><a href="{{{ URL::to('user/settings') }}}"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
						<li class="divider"></li>

						<li><a href="{{{ URL::to('user/logout') }}}"><span class="glyphicon glyphicon-share"></span> Logout</a></li>
					</ul>
				</li>
			</ul>
			<!--
			<ul class="nav navbar-nav pull-right">
                <li><a href="{{{ URL::to('blog') }}}">Blog</a></li>
                @if (Auth::check())
                @if (Auth::user()->hasRole('admin'))
                <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                @endif
                <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                @else
                <li {{(Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('Sign Up') }}}</a></li>
                @endif
            </ul>-->
		</div><!-- ./ nav-collapse -->
    </div><!-- ./ container -->
</div><!-- ./ navbar -->


	<div style="height: 50px;"></div>

	<!-- Notifications -->
	@include('notifications')
	<!-- ./ notifications -->

	<!-- Content -->
	@yield('content')
	<!-- ./ content -->

</div><!-- ./ wrap -->

		<!-- Footer -->
		<footer class="clearfix">
			@yield('footer')
		</footer>
		<!-- ./ Footer -->

	
	<!-- ./ container -->

	<!-- Javascripts -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('assets/js/wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables-bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/datatables.fnReloadAjax.js')}}"></script>
    <script src="{{asset('assets/js/jquery.colorbox.js')}}"></script>
    <script src="{{asset('assets/js/prettify.js')}}"></script>

    <script type="text/javascript">
    	$('.wysihtml5').wysihtml5();
        $(prettyPrint);
    </script>

    @yield('scripts')

</body>

</html>
