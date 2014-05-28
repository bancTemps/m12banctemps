@extends('site.layouts.admin')


@section('menu-content')
<br /><br/>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h3>Municipios con mas usuarios:</h3>
		@foreach($municipios as $municipio)
                    {{"<div class='col-md-6'> Municipio: <strong>".$municipio->nombre."</strong></div><div class='col-md-6'> usuarios: ".$municipio->valor."</div>"}}
                @endforeach
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Servicios creados al dia</h3>
		<div id="registerMonth" class="chart">
	 	</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Usuarios registrados este mes (por semana)</h3>
		<div id="serviceMonth" class="chart">
	 	</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Uso de categorias</h3>
		<div id="registerMonth2" class="chart">
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
			type: "column",
			 dataPoints: [
                            { label: "1ª semana", y: 10 },
                            { label: "2ª semana", y: 20 },
                            { label: "3ª semana", y: 60 },
                            { label: "3ª semana", y: 30 },
                            { label: "4! semana", y: 50 }
                        ]
		}]
	});

	var chart3 = new CanvasJS.Chart("registerMonth2",  {		
		data: [{
			type: "pie",
			dataPoints: [
				{ label:'Informatica',y: 50 },
				{ label:'Literatura',y: 25 },
				{ label:'Lenguas',y: 15 },
				{ label:'Arte',y: 10}
				
			]
		}]
	});



    chart.render();
    chart2.render();
    chart3.render();
    
 }
		

</script>
@stop
