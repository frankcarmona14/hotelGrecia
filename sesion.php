<?php include_once 'includes/header.php'; ?>

</header>


<!--  FORMULARIO DE INICIO DE SESION -->
<div class="fondo1">
	<div class="contenedor-video"></div>
	<div class="sesion">
		<div class="mb-5 mt-3 text-center letras">
			<h2 class="letras">Inicio de Sesion</h2>

		</div>

		<form class="letras" action="includes/login.php" method="POST">
			<p>Introduce tu Email:</p>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<i class="fa fa-envelope"></i>
						</span>
					</div>
					<input type="email" name="email" class="form-control" id="input-email" placeholder="Correo" required="">
				</div>
			</div>

			<p>Introduce tu contraseña:</p>
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

			<div class="mt-4"><button type="submit" class="btn btn-block btn-estilo-2 animate-up-2">Iniciar Sesion</button>
			</div>
		</form>

	</div>
</div>
<?php include_once 'includes/footer.php'; ?>