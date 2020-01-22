<script type="text/javascript">

	$("#newWorkGroup").click( function() {
			$("#titleModal").text("Nuevo Grupo")
		    $("#bodyModal")
		    .empty()
		    .html(`
			<div class="row">
				<div class="col-sm-12">
					<form>
					  <div class="form-group">
					    <label for="nameGroup">Nombre del nuevo grupo</label>
					    <input type="text" class="form-control" id="nameGroup" placeholder="Nombre del nuevo grupo">
					  </div>
					  <div class="form-group">
					    <label for="desGroup">Descripcion</label>
					    <textarea rows="3" class="form-control" id="desGroup" placeholder="Descripcion del grupo"></textarea>
					  </div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" id="saveGroup">Guardar grupo</button>
			</div>
		    `);

			$("#saveGroup").click( function() {
				var nameGroup = $("#nameGroup").val();
				var descGroup = $("#desGroup").val();

				if (nameGroup=='' || descGroup=='') {
					mensaje("Ups... necesita rellenar todos los campos", "error")
				}else {
					$.ajax({
						url: `saveGroup`,
						type: 'POST',
				        data: {
				            name:nameGroup,
				            desc:descGroup
				        },
						async: true,
						success: function(response) {
							if (response) {
								location.reload();
							}else {
								mensaje("Ups... parece que ocurrio un problema", "error")
							}
						}
					})
				}
			})
			$('#mdDetails').modal('show');
	})







</script>