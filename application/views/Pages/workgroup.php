<div class="container-fluid p-4">
	<div class="row mt-0">
		<div class="col-sm-10 mt-0">
			<h1 class="font-weight-bold ml-3 mb-3">Grupos</h1>
		</div>
		<div class="col-sm-2">
			<button type="button" class="btn btn-primary float-right" id="newWorkGroup">Nuevo</button>
		</div>
	</div>

	<?php
	if ($workgroup) {
		$i=0;
		$body = '<div class="row mt-3" style="margin: 0 auto">';
		foreach ($workgroup as $key) {
			$body .= '
				<div class="col-sm-4">
					<div class="card" style="width: 18rem;">
					  <img src="'.base_url().'assets/images/workgroup.jpg" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title">'.$key['name_workgroup'].'</h5>
					    <p class="card-text">'.$key['description_workgroup'].'</p>
					    <a href="#" class="btn btn-primary">Ver detalles</a>
					  </div>
					</div>
				</div>';
			if($i==2) {
				$body .= '</div><div class="row mt-3" style="margin: 0 auto">';
				$i=0;
			}else {
				$i++;	
			}			
		}
		echo $body;
	}
	?>
</div>
<!-- Modal:Nuevo Workgroup -->
<div class="modal fade" id="mdDetails"  tabindex="-1" role="dialog" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodyModal"></div>
    </div>
  </div>
</div>