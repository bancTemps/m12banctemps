@extends('site.layouts.container')


@section('title')
	{{{ $title }}} :: @parent
@stop


@section('content')
	<div class="page-header">
		<h3>
			{{{ $title }}}

			<div class="pull-right">
				<a href="{{{ URL::to('admin/categories/create') }}}" class="btn btn-small btn-info iframe"><span class="glyphicon glyphicon-plus-sign"></span> Create</a>
			</div>
		</h3>
	</div>

	<table id="categories_ids" class="table table-striped table-hover">
		<thead>
			<tr>
                            <th class="col-md-2">Nom categoria</th>
				<th class="col-md-2">Descripcio categoria</th>
				<th class="col-md-2">Slug categoria</th>
				<th class="col-md-2">{{{ Lang::get('table.actions') }}}</th>
			
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
				oTable = $('#categories_ids').dataTable( {
				"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"oLanguage": {
					"sLengthMenu": "_MENU_ records per page"
				},
				"bProcessing": true,
		        "bServerSide": true,
		        "sAjaxSource": "{{ URL::to('admin/categories/data') }}",
		        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
			});
		});
	</script>
@stop