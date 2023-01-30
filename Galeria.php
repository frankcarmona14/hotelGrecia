<?php include_once 'includes/header.php'; ?>

</header>
<div class="main">
	<div class="contenedor-video"></div>
	<section class="contenido">
		<div class="container">
			<h1 class="info-2 display-4 d-none d-sm-block py-3">GALERÍA <span>EXTERIOR</span></h1>
			<h1 class="info-2 d-block d-sm-none py-3">GALERÍA <span>EXTERIORES</span></h1>
			<div class="card-columns pb-5" id="galeria">
				<script>
					var imagenes = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
					var galeria = document.getElementById('galeria');


					for (var imagen of imagenes) {
						if (imagen >= 7) {
							galeria.innerHTML += `
						<div class="card">
					  		<a href="#" data-toggle="modal" data-target="#id${imagen}">
					    		<img class="card-img" src="img/galeriaExterior/${imagen}.jpg">
					    	</a>
				  		</div>

						<!-- Modal -->
						<div class="modal fade" id="id${imagen}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<button type="button" class="close m-2" data-dismiss="modal" aria-label="Close">
						        <span aria-hidden="true">&times;</span>
						    </button>
						 	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						  		<img src="img/galeriaExterior/${imagen}.jpg" class="img-fluid rounded">
						  	</div>
						</div> 
						`
						} else {
							galeria.innerHTML += `
						<div class="card d-none d-sm-block">
					  		<a href="#" data-toggle="modal" data-target="#id${imagen}">
					    		<img class="card-img" src="img/galeriaExterior/${imagen}.jpg">
					    	</a>
				  		</div>

						<!-- Modal -->
						<div class="modal fade" id="id${imagen}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<button type="button" class="close m-2" data-dismiss="modal" aria-label="Close">
						        <span aria-hidden="true">&times;</span>
						    </button>
						 	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						  		<img src="img/galeriaExterior/${imagen}.jpg" class="img-fluid rounded">
						  	</div>
						</div> 
						`
						}
					}
				</script>
			</div>

			<h1 class="info-2 display-4 d-none d-sm-block py-3">GALERÍA <span>INTERIOR</span></h1>
			<h1 class="info-2 d-block d-sm-none py-3">GALERÍA <span>INTERIORES</span></h1>
			<div class="card-columns pb-5" id="galeriaDos">
				<script>
					var imagenesIn = [12, 13, 14, 15, 16, 17, 18, 19, 20, 21];
					var galeriaDos = document.getElementById('galeriaDos');


					for (var imagenDos of imagenesIn) {
						if (imagenDos >= 17) {
							galeriaDos.innerHTML += `
						<div class="card">
					  		<a href="#" data-toggle="modal" data-target="#id${imagenDos}">
					    		<img class="card-img" src="img/galeriaInterior/${imagenDos}.jpg">
					    	</a>
				  		</div>

						<!-- Modal -->
						<div class="modal fade" id="id${imagenDos}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="margin-left: 5%;" aria-hidden="true">
							<button type="button" class="close m-2" data-dismiss="modal" aria-label="Close">
						        <span aria-hidden="true">&times;</span>
						    </button>
						 	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						  		<img src="img/galeriaInterior/${imagenDos}.jpg" class="img-fluid rounded">
						  	</div>
						</div> 
						`
						} else {
							galeriaDos.innerHTML += `
						<div class="card d-none d-sm-block">
					  		<a href="#" data-toggle="modal" data-target="#id${imagenDos}">
					    		<img class="card-img" src="img/galeriaInterior/${imagenDos}.jpg">
					    	</a>
				  		</div>

						<!-- Modal -->
						<div class="modal fade" id="id${imagenDos}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="margin-left: 5%;" aria-hidden="true">
							<button type="button" class="close m-2" data-dismiss="modal" aria-label="Close">
						        <span aria-hidden="true">&times;</span>
						    </button>
						 	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						  		<img src="img/galeriaInterior/${imagenDos}.jpg" class="img-fluid rounded">
						  	</div>
						</div> 
						`
						}
					}
				</script>


			</div>
		</div>

	</section>
	<?php include_once 'includes/footer.php'; ?>