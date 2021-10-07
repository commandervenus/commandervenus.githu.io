<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4 class="text-center">Registro de Administradores</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
			    <label for="name">Nombre Completo</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese nombre">
			  </div>
			  <div class="form-group">
			    <label for="email">Correo</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese correo">
			    
			  </div>
			  <div class="form-group">
			    <label for="password">Contraseña</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese contraseña">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirmar Contraseña</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirmar contraseña">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-primary register-btn">Registrar</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
