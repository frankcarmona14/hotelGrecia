<?php include_once 'includes/header.php'; ?>

</header>

<div class="main">
	<div class="contenedor-video"></div>
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="Ofacebook-tab" data-toggle="tab" href="#Ofacebook" role="tab" aria-controls="Ofacebook" aria-selected="true">OFERTA FACEBOOK</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="estandar-tab" data-toggle="tab" href="#estandar" role="tab" aria-controls="estandar" aria-selected="false">SANTORINI-MYKONOS</a>
		</li>
	</ul>

	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="Ofacebook" role="tabpanel" aria-labelledby="Ofacebook-tab">
			<section class="contenido d-flex align-items-center">
				<div class="container d-flex justify-content-center text-center">
					<div class="row justify-content-center">
						<div class="info-2 col-12">
							<h1 class="display-4 d-none d-sm-block py-3">OFERTA DE <span>FACEBOOK</span></h1>
							<h1 class="d-block d-sm-none py-3">OFERTA DE <span>FACEBOOK</span></h1>
						</div>
						<div class="col-12 col-sm-10 col-md-8 col-lg-6">
							<img src="img/oferta-1.jpg" alt="oferta-1" class="img-fluid pb-3">
							<p class="lead text-justify d-none d-sm-block">Me gusta nuestra página de Facebook y obtén un 10% de descuento! Especialmente para los usuarios de Facebook, 10% de descuento en la lista de precios. Quienes estén interesados ​​en esta oferta deben hacer clic en "Me gusta" en la página del hotel en Facebook y luego hacer una reserva desde el botón "Reservar ahora" (en Facebook) o usar el código de promoción 'fbhotel'.</p>
							<a href="https://www.facebook.com" class="btn btn-estilo-2 px-5 mb-5">IR A FACEBOOK</a>
						</div>
					</div>
				</div>
			</section>
		</div>

		<div class="tab-pane fade" id="estandar" role="tabpanel" aria-labelledby="estandar-tab">
			<section class="contenido d-flex align-items-center">
				<div class="container d-flex justify-content-center text-center">
					<div class="row justify-content-center">
						<div class="info-2 col-lg-12">
							<h1 class="display-4 d-none d-sm-block py-3">PAQUETE SANTORINI - <span>MYKONOS</span></h1>
							<h1 class="d-block d-sm-none py-3">PAQUETE SANTORINI - <span>MYKONOS</span></h1>
						</div>
						<div class="col-10 col-sm-10 col-md-8 col-lg-6">
							<img src="img/oferta-2.jpg" alt="oferta-1" class="img-fluid pb-3">
							<p class="lead text-justify d-none d-sm-block">Si desea viajar a las islas de Santorini y Mykonos, reserve en línea y reciba un cupón de descuento especial del 15% (para usted o sus amigos).</p>
							<a href="Contacto.html" class="btn btn-estilo-2 px-5 mb-5">CONTACTAR</a>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include_once 'includes/footer.php'; ?>