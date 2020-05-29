<?php include("conexion/db.php") ?>


<?php include("includes/header.php") ?>



<?php 

  if (isset($_POST['guardar'])) {   
      if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
     
     
        // creamos las variables para subir a la db
          $ruta = "upload/"; 
          $nombrefinal= trim ($_FILES['fichero']['name']); //Eliminamos los espacios en blanco
          //$nombrefinal= ereg_replace (" ", "", $nombrefinal);//Sustituye una expresión regular
          $upload= $ruta . $nombrefinal;  



          if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 
        
                     $nombre  = $_POST["nombre"]; 
                     $email = $_POST['email'];
                     $tel = $_POST['telefono'];
                     $docu = $_POST['documento'];
                     $ano = $_POST['ano'];
                     $mym = $_POST['modelo'];
                     $cp = $_POST['cp'];


                     $query = "INSERT INTO archivo (Nombre,Ruta,Tipo,Size,Email,Telefono,Documento,MarcaYModelo,Ano,CodigoPostal) 
                  VALUES ('$nombre','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."','$email','$tel',$docu,'$mym','$ano','$cp')"; 
                      


                mysqli_query($con,$query) or die(mysql_error()); 
                      
                        // echo "<b>Upload exitoso!. Datos:</b><br>";  
                        // echo "Nombre: <i><a href=\"".$ruta . $nombrefinal."\">".$_FILES['fichero']['name']."</a></i><br>";
                        // echo "Tipo MIME: <i>".$_FILES['fichero']['type']."</i><br>";  
                        // echo "Peso: <i>".$_FILES['fichero']['size']." bytes</i><br>";  
                        // echo "<br><hr><br>";  

                        $_SESSION['message'] = 'El Archivo ' . $_FILES['fichero']['name'] . ' se cargo de forma correcta.';
                        $_SESSION['message_type'] = 'success';
              
          }  
      }  
  } 

 ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">JAAR Seguros</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">CONOCENOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">COTIZA TU SEGURO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="cliente.php">SOY CLIENTE</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" style="color:black">Envianos tus datos</div>
        <div class="intro-heading text-uppercase"style="color:black">LE ENVIAREMOS LA MEJOR COTIZACION PARA SU VEHICULO
        </div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">COMENCEMOS</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">¿Quienes somos?</h2>
          <br>
          <br>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3">
          <a data-toggle="collapse" href="#collapseBuilding" role="button" aria-expanded="false" 
          aria-controls="collapseExample">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-building fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <h3>Nosotros</h3>
          <div class="collapse" id="collapseBuilding">
            <div class="card card-body">
              <p class="text-muted">Somos unos asesores de seguros matriculados ubicados en Zona Oeste.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <a data-toggle="collapse" href="#collapseSearch" role="button" aria-expanded="false" 
          aria-controls="collapseExample">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-search fa-stack-1x fa-inverse"></i>
          </span>
          </a>
          <h3>Objetivos</h3>
            <div class="collapse" id="collapseSearch">
            <div class="card card-body">
             <p class="text-muted">Nuestro objetivo es brindarte el mejor plan para tu vehiculo y con el mejor precio.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <a type="button" data-toggle="modal" data-target="#modalShield">

            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-car fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <h3>Coberturas</h3>
                    <!-- Modal -->
            <div class="modal fade" id="modalShield" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Coberturas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                      <?php include("coberturas.php") ?>

                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-3">
          <a data-toggle="collapse" href="#collapseCar" role="button" aria-expanded="false" 
          aria-controls="collapseExample">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shield-alt fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <h3>Companias</h3>
            <div class="collapse" id="collapseCar">
              <div class="card card-body">
                <p class="text-muted">Coberturas muy amplias tanto en modelo como en precio de cuotas.</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="color: black">Envíanos un pdf con las fotos de tu vehiculo
          </h2>
          <h3 class="section-subheading text-muted">De sus laterales, frente, parte trasera y el desgaste de la cubierta.
          Muy importante que las ventanillas esten cerradas.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Ingrese su nombre." name="nombre">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Ingrese su apellido" name="email">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Telefono *" required="required" data-validation-required-message="Ingrese su telefono." name="telefono">
                  <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group">
                  <input class="form-control" id="archivo" type="file" size="200" maxlength="200" required="required" data-validation-required-message="Eliga un archivo para subir." name="fichero">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="modelo" type="text" size="200" maxlength="200" required="required" data-validation-required-message="Ingrese la marca y el modelo del vehiculo" name="modelo" placeholder="Marca y Modelo *">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="ano" type="text" size="200" maxlength="200" required="required" data-validation-required-message="Ingrese el año del vehiculo" name="ano" placeholder="Año*">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="cp" type="text" size="200" maxlength="200" required="required" data-validation-required-message="Ingrese el código postal del vehiculo" name="cp" placeholder="Código Postal *">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="documento" type="text" size="200" maxlength="200" required="required" data-validation-required-message="Ingrese el documento" name="documento" placeholder="Documento *">
                  <p class="help-block text-danger"></p>
                </div>
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
                <input id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="guardar">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


<?php include("includes/footer.php") ?>