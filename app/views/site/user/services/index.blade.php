@extends('site.layouts.user')


{{-- Web site Title --}}
@section('title')
	
@stop
@section('menu-content')
<div class="container">

<div class="page-header">
	<h3><strong>Servicios creados</strong></h3>
</div>
       @if ( Session::get('servicio') )
        <div class="alert alert-success">{{ Session::get('servicio') }}</div>
       @endif
       
<table id="my_services" class="table table-striped table-hover">
	<thead>
		<tr>
			<th class="col-md-3">{{ Lang::get('admin/roles/table.name') }}}</th>
			<th class="col-md-1">{{{ Lang::get('admin/roles/table.participants') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.started_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.finish_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.points') }}}</th>
            <th class="col-md-2">{{{ Lang::get('admin/roles/table.options') }}}</th>
		</tr>
	</thead>
	<tbody>
            
	</tbody>
</table>
<a class="button border-fade no-subrallado" href="{{{ URL::to('user/services/create')  }}}">Crear servicio</a>
<div class="page-header">
	<h3><strong>Servicios solicitados</strong></h3>
</div>

<table id="realized_services" class="table table-striped table-hover">
	<thead>
		<tr>
			<th class="col-md-3">{{{ Lang::get('admin/roles/table.name') }}}</th>
			<th class="col-md-3">{{{ Lang::get('admin/roles/table.started_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.finish_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.points') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.options') }}}</th>
		</tr>
	</thead>
	<tbody>
            <tr>
                
            </tr>
	</tbody>
</table>
<div class="page-header">
	<h3><strong>Servicios consumidos</strong></h3>
</div>
<table id="service_consumeds" class="table table-striped table-hover">
	<thead>
		<tr>
			<th class="col-md-3">{{{ Lang::get('admin/roles/table.name') }}} Servicio</th>
			<th class="col-md-3">Propietario del Servicio</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.started_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.options') }}}</th>
		</tr>
	</thead>
	<tbody>
            <tr>
                
            </tr>
	</tbody>
</table>

</div>
@stop

{{-- Scripts --}}
@section('scripts')


	<script type="text/javascript">

		var oTable;
		$(document).ready(function() {
			oTable = $('#my_services').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('user/servicelist') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});

		var oTable;
		$(document).ready(function() {
			oTable = $('#realized_services').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('user/doservicelist') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
                var oTable;
		$(document).ready(function() {
			oTable = $('#service_consumeds').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('user/doconsumedlist') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});

	</script>
@stop
