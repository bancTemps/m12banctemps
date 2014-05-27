@extends('site.layouts.container')

@section('content')
	<div class="page-header">
		<h3>
			Reports

			
		</h3>
	</div>

	<table id="reports_id" class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="col-md-3">Denunciado</th>
				<th class="col-md-3">Descripcion</th>
				<th class="col-md-3">{{{ Lang::get('admin/users/table.created_at') }}}</th>
                                <th class="col-md-3">Acciones</th>
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
				oTable = $('#reports_id').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('admin/reports/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop
