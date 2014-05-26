@extends('site.layouts.admin')


@section('menu-content')

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Usuarios registrados este mes</h3>
		<div id="registerMonth" class="chart">
	 	</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Servicios creados este mes</h3>
		<div id="serviceMonth" class="chart">
	 	</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Usuarios registrados este mes</h3>
		<div id="registerMonth2" class="chart">
	 	</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Servicios creados este mes</h3>
		<div id="serviceMonth2" class="chart">
	 	</div>
	</div>
@stop



@section('scripts')
<script src="{{asset('assets/js/canvasjs.min.js') }}"></script>

<script type="text/javascript">
	
window.onload = function () {
    var chart = new CanvasJS.Chart("registerMonth",  {		
		data: [{
			type: "line",
			dataPoints: [
				{ x: new Date(2012, 00, 1), y: 2 },
				{ x: new Date(2012, 00, 2), y: 5 },
				{ x: new Date(2012, 00, 3), y: 4 },
				{ x: new Date(2012, 00, 4), y: 10 },
				{ x: new Date(2012, 00, 5), y: 12 },
				{ x: new Date(2012, 00, 6), y: 10 },
				{ x: new Date(2012, 00, 7), y: 5 },
				{ x: new Date(2012, 00, 8), y: 8 },
				{ x: new Date(2012, 00, 9), y: 15 },
				{ x: new Date(2012, 00, 10), y: 8 },
				{ x: new Date(2012, 00, 11), y: 25 },
				{ x: new Date(2012, 00, 12), y: 20 }
			]
		}]
	});

	var chart2 = new CanvasJS.Chart("serviceMonth",  {
		data: [{
			type: "line",
			dataPoints: [
				{ x: new Date(2012, 00, 1), y: 2 },
				{ x: new Date(2012, 00, 2), y: 5 },
				{ x: new Date(2012, 00, 3), y: 4 },
				{ x: new Date(2012, 00, 4), y: 10 },
				{ x: new Date(2012, 00, 5), y: 12 },
				{ x: new Date(2012, 00, 6), y: 10 },
				{ x: new Date(2012, 00, 7), y: 5 },
				{ x: new Date(2012, 00, 8), y: 8 },
				{ x: new Date(2012, 00, 9), y: 15 },
				{ x: new Date(2012, 00, 10), y: 8 },
				{ x: new Date(2012, 00, 11), y: 25 },
				{ x: new Date(2012, 00, 12), y: 20 }
			]
		}]
	});

	var chart3 = new CanvasJS.Chart("registerMonth2",  {		
		data: [{
			type: "line",
			dataPoints: [
				{ x: new Date(2012, 00, 1), y: 2 },
				{ x: new Date(2012, 00, 2), y: 5 },
				{ x: new Date(2012, 00, 3), y: 4 },
				{ x: new Date(2012, 00, 4), y: 10 },
				{ x: new Date(2012, 00, 5), y: 12 },
				{ x: new Date(2012, 00, 6), y: 10 },
				{ x: new Date(2012, 00, 7), y: 5 },
				{ x: new Date(2012, 00, 8), y: 8 },
				{ x: new Date(2012, 00, 9), y: 15 },
				{ x: new Date(2012, 00, 10), y: 8 },
				{ x: new Date(2012, 00, 11), y: 25 },
				{ x: new Date(2012, 00, 12), y: 20 }
			]
		}]
	});

	var chart4 = new CanvasJS.Chart("serviceMonth2",  {
		data: [{
			type: "line",
			dataPoints: [
				{ x: new Date(2012, 00, 1), y: 2 },
				{ x: new Date(2012, 00, 2), y: 5 },
				{ x: new Date(2012, 00, 3), y: 4 },
				{ x: new Date(2012, 00, 4), y: 10 },
				{ x: new Date(2012, 00, 5), y: 12 },
				{ x: new Date(2012, 00, 6), y: 10 },
				{ x: new Date(2012, 00, 7), y: 5 },
				{ x: new Date(2012, 00, 8), y: 8 },
				{ x: new Date(2012, 00, 9), y: 15 },
				{ x: new Date(2012, 00, 10), y: 8 },
				{ x: new Date(2012, 00, 11), y: 25 },
				{ x: new Date(2012, 00, 12), y: 20 }
			]
		}]
	});

    chart.render();
    chart2.render();
    chart3.render();
    chart4.render();
 }
		

</script>
@stop
