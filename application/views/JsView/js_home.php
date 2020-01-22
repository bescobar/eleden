<script type="text/javascript">
$(document).ready( function() {
	initCalendar();
	initGraficaIO();
});

function initCalendar() {
	var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';

	$('#calendar').fullCalendar({
		locale: 'es',
		editable: true,
		selectable: true,
		selectHelper: true,
		eventSources: [{
			url: base_url+"index.php/home_controller/returnDataWorkplan",
			color: 'yellow',    
			textColor: 'black'  
		}],
		dayClick: function(date) {},
		eventClick: function(event) {
			$("#titleModal").text("Detalle de la actividad")
		    $("#bodyModal")
		    .empty()
		    .html(`
			<div class="row">
				<div class="col-sm-12">
					<p class="pr-3 pl-3"><strong>Nombre actividad: </strong> `+event.title+`</p>
					<p class="pr-3 pl-3"><strong>Dirigida por: </strong> `+event.Respon+`</p>
					<p class="pr-3 pl-3"><strong>Fecha inicio: </strong> `+event.startFormat+`</p>
					<p class="pr-3 pl-3"><strong>Fecha fin: </strong> `+event.endFormat+`</p>
					<p class="pr-3 pl-3"><strong>Lugar: </strong> `+event.place+`</p>
					<p class="pr-3 pl-3"><strong>Hora: </strong>3:00 p. m.</p>
					<p class="pr-3 pl-3"><strong>Costo de actividad: </strong>`+event.coste+`</p>
				</div>
			</div>
		    `);

			$('#mdDetails').modal('show');
		},
		eventDrop: function(event, delta) {

		}
	});
}

function initGraficaIO() {
	Highcharts.chart('container', {
	  chart: {
	    type: 'line'
	  },
	  title: {
	    text: ''
	  },
	  subtitle: {
	    text: ''
	  },
	  xAxis: {
	    categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
	  },
	  yAxis: {
	    title: {
	      text: ''
	    }
	  },
	  plotOptions: {
	    line: {
	      dataLabels: {
	        enabled: true
	      },
	      enableMouseTracking: false
	    }
	  },
	  series: [{
	    name: 'Entradas',
	    data: [23000, 56500, 45230, 85000]
	  }, {
	    name: 'Salidas',
	    data: [12500, 56200, 45200, 45620]
	  }]
	});
}

	




</script>