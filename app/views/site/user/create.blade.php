@extends('site.layouts.container')

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

<div class="col-sm-offset-1 col-sm-8 col-md-8">
	<div class="page-header">
		<h1>Registro</h1>
	</div>
	{{ Confide::makeSignupForm()->render() }}
</div>

@stop
