<script type="text/javascript">
$(document).ready( function() {
	
	initCalendar();

});

var base_url = window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
function initCalendar() {
	var idWorkPlan = $("#idWorkplan").val();


	$('#calendarWorkPlan').fullCalendar({
		locale: 'es',
		editable: true,
		selectable: true,
		selectHelper: true,
		eventSources: [{
			url: base_url+"index.php/workplan_controller/returnDataWorkplan",
			color: 'yellow',    
			textColor: 'black'  
		}],
		dayClick: function(event) {
			F1 = $.fullCalendar.formatDate(event, "YYYY-MM-D");

			
			uploadDataActivity(idWorkPlan, F1);

		},
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

function uploadDataActivity(idWorkPlan, date_activity) {
	var modalBody = ``;

	modalBody = `
	<div class="row">
		<div class="col-sm-12">
			<form>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="nameActivity">Nombre de la actividad</label>
						<input type="text" class="form-control" id="nameActivity" placeholder="Nombre de la actividad">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="descActivity">Descripcion de la actividad</label>
						<textarea class="form-control" id="descActivity" rows="3"></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="cmbWorkGroup">Dirige</label>
						<select class="selectpicker form-control" id="cmbWorkGroup" data-show-subtext="true" data-live-search="true">
							<option value="">Ministerio Juvenil</option>
							<option value="">Sociedad de Damas</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="descActivity">Hora</label>
						<div class="input-group date" id="datetimepicker3" data-target-input="nearest">
							<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
							<div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="far fa-clock"></i></div>
							</div>
						</div>
					</div>
					<div class="form-group col-md-4">
						<div class="form-group col-md-12">
							<label for="descActivity">Costo</label>
							<input type="text" class="form-control" id="nameActivity" placeholder="Nombre de la actividad">
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="descActivity">Lugar</label>
						<textarea class="form-control" id="descActivity" rows="3"></textarea>
					</div>
				</div>
			</form>
		</div>
	</div>`;

	$("#modalBody")
	.empty()
	.append(modalBody)
	$("#titleModal").text(`Nueva actividad para dia `+date_activity)

        $('#datetimepicker3').datetimepicker({
            format: 'LT'
        });
		$('select').selectpicker();
			/*$.ajax({
				url: base_url+"index.php/clientes/"+F1,
				type: 'post',
				async:true,
				success: function(response) { 
					
				}
			})*/
	$("#mdTemporal").modal("show")
}
</script>