<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<span class="align-middle"></span>
		</div>
		<div class="col-sm-4">
			<div class="row mt-5">
				<div class="col-sm-12">
					<h1 class="display-4 mt-5">Bienvenido</h1>
					<p class="font-weight-light">Primera Iglesia Evangelica El Eden</p>
					<hr>
				</div>
			</div>			
			<div class="card">
				<div class="card-body">
					<p class="font-weight-bold">Inicie sesion</p><hr>
					<form method="post" action="<?php echo base_url('index.php/validate_account')?>">
					  <div class="form-group">
					    <label for="name_user">Nombre de usuario</label>
					    <input type="text" class="form-control" id="name_user" name="name_user" placeholder="Nombre de usuario">
					  </div>
					  <div class="form-group">
					    <label for="pass_user">Contraseña</label>
					    <input type="password" class="form-control" id="pass_user" name="pass_user" placeholder="Contraseña">
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="remember_account">
					    <label class="form-check-label" for="remember_account">Recuerdame</label>
					  </div>
					  <button type="submit" class="btn btn-primary">Siguiente</button>
					</form>
					<h5 style="color: red;" class="mt-3"><?php if(isset($mensaje)) echo $mensaje; ?></h5>
					<span style="color: red;" class="mt-3"><?=validation_errors();?></span>
				</div>
			</div>	
		</div>
	</div>
</div>