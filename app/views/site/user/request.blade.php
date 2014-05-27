@extends('site.layouts.user')


{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.requests') }}} ::
@parent
@stop
@section('menu-content')

<div class="page-header">
    <h3><strong>Solicitudes pendientes</strong></h3>
</div>

<table id="requests" class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-md-5">{{{ Lang::get('admin/roles/table.user') }}}</th>
            <th class="col-md-3">{{{ Lang::get('admin/roles/table.service') }}}</th>
            <th class="col-md-2">Fecha inicio</th>
            <th class="col-md-2">{{{ Lang::get('admin/roles/table.status') }}}</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                
            </tr>
    </tbody>
</table>

@stop


@section('scripts')

    <script type="text/javascript">

        var oTable;
        $(document).ready(function() {
            oTable = $('#requests').dataTable( {
                "sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records per page"
                },
                "bProcessing": true,
                "bServerSide": true,
                "sAjaxSource": "{{ URL::to('user/requestlist') }}",
                "fnDrawCallback": function ( oSettings ) {
                    $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
                }
            });
        });

    </script>
@stop
