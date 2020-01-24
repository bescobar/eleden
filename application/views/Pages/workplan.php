<div class="container-fluid p-4">
	<div class="row mt-0">
		<div class="col-sm-11 mt-0">
			<input type="hidden" name="idWorkplan" id="idWorkplan" value="<?php echo $workplan['id_plan'] ?>">
			<h1 class="font-weight-bold"><?php echo $workplan['name_plan'] ?></h1>
			<p class="font-weight-lighter"><?php echo $workplan['description_plan'] ?></p>
		</div>
		<div class="col-sm-1">
			<a href="#!" class="nav-link text-dark float-right">
				<i class="fas fa-edit  mr-3 text-primary fa-2x"></i>
			</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<p class="font-weight-bold"><?php echo $workplan['date_value'] ?></p>
					<div id='calendarWorkPlan'></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MODAL TEMPORAL -->
<div class="modal fade bd-example-modal-lg" id="mdTemporal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="titleModal"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modalBody">
				

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</div>
</div>