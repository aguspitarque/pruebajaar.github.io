<?php include ("conexion/db.php") ?>

<?php include ("includes/header.php") ?>

<?php 

	if (isset($_GET['id'])) {
		
		$IdCliente = $_GET['id'];

		$query = "SELECT * FROM usuario WHERE Id = $IdCliente";

		$result = mysqli_query($con,$query);


		while ($row = mysqli_fetch_array($result)) {
			
			$nombreCliente = $row['Nombre'];
			$docCliente = $row['Documento'];
		}

	}
 ?>

 <nav class="navbar navbar-expand-lg bg bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Hola <?php echo $nombreCliente;?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="cliente.php">CERRAR SESION <span>&#8594;</span></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


	<section class="page-section" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h2 class="section-heading text-uppercase" style="color:black;">DESCARGA TUS DOCUMENTOS</h2>	
				</div>
				<div class="col-md-2"></div>
			</div>	
		</div>
	</section>


	<section id="contact" class="page-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">Cuponera de pago</h5>
					    <a href="archivosClientes/poliza<?php echo $docCliente;?>.pdf" 
							download="pdf <?php echo $nombreCliente;?>" class="card-link">
							Descargar
						</a>
					  </div>
					</div>	
				</div>
				<div class="col-md-4 ">
					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">Poliza de seguros</h5>
					    <a href="archivosClientes/poliza<?php echo $docCliente;?>.pdf" 
							download="pdf <?php echo $nombreCliente;?>" class="card-link">
							Descargar
						</a>
					  </div>
					</div>	
				</div>
				<div class="col-md-4">
					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">Permiso</h5>
					    <a href="archivosClientes/poliza<?php echo $docCliente;?>.pdf" 
							download="pdf <?php echo $nombreCliente;?>" class="card-link">
							Descargar
						</a>
					  </div>
					</div>	
				</div>
			</div>
		</div>	
	</section>


<?php  include("includes/footer.php") ?>