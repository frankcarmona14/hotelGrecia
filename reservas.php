<?php include_once 'includes/header.php'; ?>
</header>


<!---FORMULARIO DE RESERVA---->
<div class="fondo2 ">
	<div class="sesion2">
		<div class="mb-5 mt-3 text-center letras">
			<h2 class="letras">¡Haz tu reserva con nosotros!</h2>

		</div>

		<form class="letras ">
			<h5>Ingresa tus datos personales:</h5>
			<div class="row ">

				<div class="col-md-6 col-sm-6 col-xs-6">
					<br>
					<h6> Nombre </h6>
					<input type="text" class="form-control" placeholder="Nombre" />
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6">
					<br>
					<h6> Apellidos</h6>
					<input type="text" class="form-control" placeholder="Apellidos" />
				</div>

			</div>

			<div class="row ">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<br>
					<h6> Email </h6>
					<input type="text" class="form-control" placeholder="Email" />
					<span>¡La confirmacion se enviará a este correo!</span>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6">
					<br>
					<h6> Introduce tu número de móvil </h6>
					<input type="text" class="form-control" placeholder="Telefono" />
				</div><br>

			</div>

			<div class="row ">
				<div class="col-md-6 col-sm-6 col-xs-6">
					<br>
					<h6>¿Para quién es esta reserva?</h6>
					<input type="radio" name="huesped" value="reserva" style="margin-right: 10px" &nbsp />Yo soy el húesped principal<br>
					<input type="radio" name="huesped" value="reserva1" style="margin-right: 10px" &nbsp />La reserva es para otra persona<br>

				</div><br>

			</div><br>





			<div class="panel panel-default">
				<div class="panel-heading">

					<h5>Ingresa los datos de la tarjeta con la que vas a realizar tu reserva:</h5><br>
					<div class="row ">
						<div class="col-md-12">
							<h6>Ingresa el numero de tarjeta</h6>
							<input type="text" class="form-control" placeholder="Nº de tarjeta" />
						</div>
					</div>
					<div class="row ">
						<div class="col-md-3 col-sm-3 col-xs-3">
							<h6> Mes de expiración</h6>
							<input type="text" class="form-control" placeholder="MM" />
						</div>

						<div class="col-md-3 col-sm-3 col-xs-3">
							<h6> Año de expiración</h6>
							<input type="text" class="form-control" placeholder="YY" />
						</div>

						<div class="col-md-3 col-sm-3 col-xs-3">
							<h6> CCV</h6>
							<input type="text" class="form-control" placeholder="CCV" />
						</div>

					</div>
					<div class="row ">
						<div class="col-md-12 pad-adjust">
							<h6> Nombre del titular</h6>
							<input type="text" class="form-control" placeholder="Nombre" />
						</div>
					</div><br>

					<div class="row ">

						<div class="col-md-5 col-sm-6 col-xs-6 align-items-center">
							<input type="submit" class="btn btn-warning btn-block" value="Pagar Ahora" />
						</div>
					</div>

				</div>
			</div>
		</form>

	</div>
</div>
<?php include_once 'includes/footer.php'; ?>