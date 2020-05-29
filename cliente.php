<?php include("conexion/db.php") ?>

<?php include("includes/header.php") ?>

  <nav class="navbar navbar-expand-lg bg bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">JAAR Seguros Clientes</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">SALIR <span>	&#8594;</span></a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  	<section class="page-section" id="contact">
  		<div class="row">
  			<div class="col-md-4"></div>
  			<div class="col-md-4">
			<form action="cliente.php" method="POST">
		                <div class="form-group">
		                  <input class="form-control" id="documento" type="text" placeholder="Documento *" required="required" data-validation-required-message="Ingrese el Documento" name="usuario">
		                  <p class="help-block text-danger"></p>
		                </div>
		                <div class="form-group">
		                  <input class="form-control" id="" type="password" placeholder="Password *" name="pass">
		                </div>

		              <div class="clearfix"></div>
		              <div class="col-lg-12 text-center">
		                    <?php if(isset($_SESSION['message'])){ ?>
		                    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
		                      <?= $_SESSION['message'] ?> 
		                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                        <span aria-hidden="true">&times;</span>
		                      </button>
		                    </div>
		                  <?php session_unset(); } ?>
		                <input id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" 
		                name="ingresar" value="Ingresar">

		                	<?php include("ingresar.php") ?>

		              </div>
          </form>
          </div>
          <div class="col-md-4"></div>
        </div>
    </section>


<?php include("includes/footer.php") ?>