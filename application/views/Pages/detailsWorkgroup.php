<div class="container-fluid p-4">
	<div class="row mt-0">
		<div class="col-sm-11 mt-0">
			<h1 class="font-weight-bold"><?php echo $dataWorkGroup[0]['name_workgroup'] ?></h1>
			<p class="font-weight-lighter"><?php echo $dataWorkGroup[0]['description_workgroup'] ?></p>
		</div>
		<div class="col-sm-1">
			<a href="#!" class="nav-link text-dark float-right">
				<i class="fas fa-edit  mr-3 text-primary fa-2x"></i>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="card text-center">
			  <div class="card-body">
			    <h1 class="font-weight-bold">12</h1>
			    <p class="card-text">Actividades Realizadas</p>
			    <a href="#" class="">Ver actividades</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
			  <div class="card-body">
			    <h1 class="font-weight-bold">23</h1>
			    <p class="card-text">Actividades Pendientes</p>
			    <a href="#" class="">Ver actividades</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="card text-center">
			  <div class="card-body">
			    <h1 class="font-weight-bold">0</h1>
			    <p class="card-text">Actividades no realizadas</p>
			    <a href="#" class="">Ver actividades</a>
			  </div>
			</div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
	      <div class="card">
	        <div class="card-body">
	          <p class="font-weight-bold m-0 mb-3">Directiva actual</p>
	            <table class="table mt-3 text-center">
	              <thead class="thead-dark">
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Nombre completo</th>
	                  <th scope="col">Cargo</th>
	                  <th scope="col">Telefono</th>
	                  <th scope="col">Acciones</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <th scope="row">1</th>
	                  <td>Mark</td>
	                  <td>Presidente</td>
	                  <td>8826-8430</td>
	                  <td>
	                  	<a href='#' class ='btn btn-sm tooltip-test'><i class="fas fa-edit"></i></a>
						<a href='#' class ='btn btn-sm tooltip-test'><i class="far fa-trash-alt"></i></a>
						<a href='#' class ='btn btn-sm tooltip-test'><i class="fas fa-times"></i></a>					
                       </td>
	                </tr>
	                <tr>
	                  <th scope="row">1</th>
	                  <td>Mark</td>
	                  <td>Tesoreo</td>
	                  <td>8826-8430</td>
	                  <td class="text-center">	                  	                               
						<a href='#' class ='btn btn-sm tooltip-test'><i class="fas fa-edit"></i></a>
						<a href='#' class ='btn btn-sm tooltip-test'><i class="far fa-trash-alt"></i></a>
						<a href='#' class ='btn btn-sm tooltip-test'><i class="fas fa-times"></i></a>						
                       </td>
	                </tr>
	                <tr>
	                  <th scope="row">1</th>
	                  <td>Mark</td>
	                  <td>Vocal</td>
	                  <td>8826-8430</td>
	                  <td class="text-center">	                  	                               
						<a href='#' class ='btn btn-sm tooltip-test'><i class="fas fa-edit"></i></a>
						<a href='#' class ='btn btn-sm tooltip-test'><i class="far fa-trash-alt"></i></a>
						<a href='#' class ='btn btn-sm tooltip-test'><i class="fas fa-times"></i></a>						
                       </td>
	                </tr>
	              </tbody>
	            </table>
	        </div>
	      </div>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div id='calendarWorkGroup'></div>
				</div>
			</div>
		</div>
	</div>
</div>