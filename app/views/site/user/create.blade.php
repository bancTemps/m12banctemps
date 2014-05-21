@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.register') }}} ::
@parent
@stop


@section('styles')
<style type="text/css">
input {
	text-align: left;
}
</style>
@stop


{{-- Content --}}
@section('content')

<div class="container">
	<div class="page-header">
		<h1>Registro</h1>
	</div>
	{{ Confide::makeSignupForm()->render() }}
</div>

@stop
