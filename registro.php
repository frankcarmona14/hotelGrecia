<?php include_once 'includes/header.php'; ?>
</header>

<!--  FORMULARIO DE INICIO DE SESION -->
<div class="sesion1 fondo">
	<div class="mb-5 mt-3 text-center letras">
		<h2 class="letras">Alta de nuevo usuario</h2>
	</div>

	<div class="container">
		<form class="letras" action="includes/registros.php" method="POST">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-6">
					<p>Introduce tu nombre:</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-user-circle"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Nombre" required="" name="nombre">
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<p>Introduce tus apellidos:</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="far fa-user"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Apellidos" required="" name="apellidos">
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<p>Introduce tu Email:</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-envelope"></i>
								</span>
							</div>
							<input type="email" class="form-control" id="input-email" placeholder="Correo" required="" name="email">
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<p>Escribe tu fecha de nacimiento:</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-calendar"></i>
								</span>
							</div>
							<input type="date" class="form-control" required="" name="fechaNacimiento">
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<p>Escribe una contraseña:</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-unlock-alt"></i>
								</span>
							</div>
							<input class="form-control" placeholder="Contraseña" type="password" required="" id="txtPassword" name="pass">
							<div class="input-group-append">
								<button id="show_password" class="btn" type="button"> <span class="far fa-eye icon"></span> </button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<p>Repite la contraseña:</p>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-unlock-alt"></i>
								</span>
							</div>
							<input type="password" class="form-control" placeholder="Confirmar contraseña" required="" name="passrepeat">
						</div>
					</div>
				</div>
				<div class="col-lg-10 col-md-10">
					<div class="my-4">
						<div class="form-check round-check mb-3">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox">
								<span class="form-check-sign"></span> Acepto terminos y condiciones</a></label>
						</div>
					</div>
				</div>
				<div class="mt-4 col-lg-4 col-md-5">
					<button type="submit" class="btn btn-block btn-estilo-2 animate-up-2">Crear cuenta</button>
				</div>

			</div>
		</form>
	</div>
</div>
<?php include_once 'includes/footer.php'; ?>