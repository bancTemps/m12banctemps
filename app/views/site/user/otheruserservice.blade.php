@extends('site.layouts.otheruser')


@section('menu-content')

<div class="page-header">
	<h3><strong>Servicios creados</strong></h3>
</div>

<table id="my_services" class="table table-striped table-hover">
	<thead>
		<tr>
			<th class="col-md-4">{{{ Lang::get('admin/roles/table.name') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.participants') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.created_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.finish_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.points') }}}</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>

<div class="page-header">
	<h3><strong>Servicios realizados</strong></h3>
</div>

<table id="realized_services" class="table table-striped table-hover">
	<thead>
		<tr>
			<th class="col-md-5">{{{ Lang::get('admin/roles/table.name') }}}</th>
			<th class="col-md-3">{{{ Lang::get('admin/roles/table.author') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.finish_at') }}}</th>
			<th class="col-md-2">{{{ Lang::get('admin/roles/table.points') }}}</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>

@stop



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
		        "sAjaxSource": "{{ URL::to('view/getJson/'.$user->username) }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});		
	</script>
@stop
