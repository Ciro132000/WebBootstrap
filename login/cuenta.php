<?php
  
    session_start();
    $nombre="";
    if(!empty($_SESSION['Usuario'])){
      $nombre=$_SESSION['Usuario'];
    }elseif($_SESSION['Usuario2']){
      $nombre=$_SESSION['Usuario2'];
    }else{
        echo "<script language='javascript'>alert('Tienes que loguearte')</script>";
        header ('location: Ingresar/index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fashion Point</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <Script type="text/javascript" src="js/codigo.js"></Script>
  <link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <div class="container">
            <a class="navbar-brand" href="../index.html">
              <img src="../img/Logo.png" alt="Fashion Point" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="../index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://fesdy.pe/public/images/productos/1603201679CAT7-20-BAJA.pdf"
                    target="_blank">Catálogo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Hombres/index.html">Varones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Mujeres/index.html">Mujeres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Nosotros/index.html">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Contactos/index.html">Contáctenos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cotización</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="../Cotizacion/Varones/index.php">Varones</a>
                    <a class="dropdown-item" href="../Cotizacion/Mujeres/index.php">Mujeres</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a href=""><img src="../img/login.svg" alt="" width="40px" ></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <section class=" text-center">
        <div>
            <h2 id="tituloPrincipal">Mi cuenta</h2>
        </div>
    </section>

      <div class="container text-center">
      <p class="bienvenido">Bienvenido a Fashion Point <br> Usuario: <?php echo $nombre; ?></p>
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <p>Esta es una cuenta personal en la valida web de Fashion Point para realizar sus pedidos.<br>
              Proximamente estaran diponibles mas opciones, como el carrito de compras y editar tu perfil.<br>
              Muchas gracias por ser parte de Fashion Point.    
          </p>
        </div>

          <div class="col-md-4 col-sm-12">
        <ul class="list-group">
          <li class="list-group-item"><a href="#">  > Mi perfil</a></li>
          <li class="list-group-item"><a href="#">  > Mis productos</a></li>
          <li class="list-group-item"><a href="#">  > Detalles de la cuenta</a></li>
          <li class="list-group-item"><a href="#">  > Direcciones</a></li>
          <li class="list-group-item"><a class="logout" href="cerrar.php">  > cerrar sesion</a></li>
        </ul>
        </div>

        
        </div>
        <br> <br> <br> <br>
      </div>

<footer class="bg-dark text-white">
        <br>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <img src="../img/Logo.png" alt="" width="200px">
            </div>
            <div class="col-md-4 col-sm-12">
              <h2 style="font-size: 25px;">Mapa del sitio web</h2>
              <div class="list-group">
                <a href="../index.html" class="text-white">Inicio</a>
                <a href="../Hombres/index.html" class="text-white">Varones</a>
                <a href="../Mujeres/index.html" class="text-white">Mujeres</a>
                <a href="../Nosotros/index.html" class="text-white">Nosotros</a>
                <a href="../Contactos/index.html" class="text-white">Contáctenos</a>
              </div>
    
            </div>
    
            <div class="col-md-4 col-sm-12">
              <h2 style="font-size: 25px;">Atención al cliente</h2>
              <div class="list-group">
                <a href="../AtencionCliente/TerminosLegales/index.html" class="text-white">Términos legales</a>
                <a href="../AtencionCliente/TerminosCondiciones/index.html" class="text-white">Términos y condiciones</a>
                <a href="../AtencionCliente/TiemposEnvio/index.html" class="text-white">Tiempos y costos de envío</a>
                <a href="../AtencionCliente/Cambios/index.html" class="text-white">Cambios</a>
                <br>
              </div>
            </div>
          </div>
    

    
          <hr>
          <div class="row justify-content-between">
            <div class="col-4">
              <h4 class="text-white text-center" style="font-size: 15px;"> Copyright (©) todos los derechos reservados</h4>
            </div>
            <div class="col-4">
              <div class="d-flex justify-content-around">
                <a href="https://www.instagram.com/fashionpoint2405/?igshid=1dexzdqtn2qtc&fbclid=IwAR110bgDQGTn7OVdNxbd2NGdKB3aksUkMGBx_0tDfWKCgO0-8Q9udh9qN9U"
                  target="_blank"><img src="../img/174855.svg" title="Visitar la pagina de facebook" height="30"></a>
                <br></br>
                <a href="https://www.facebook.com/fashionpoint2405/" target="_blank"><img src="../img/733547.svg"
                    title="Visitar la pagina de instagram" height="30"></a>
                <br></br>
                <a href="https://api.whatsapp.com/send?phone=51935336479&text=Bienvenido%20a%20Fashion%20Point"
                  title="WhatsApp de Fashion Point" target="_blank"><img src="../img/733585.svg" height="30"></a>
              </div>
            </div>
            <div class="col-4">
              <div style="text-align:right ;">
                <img src="https://www.flaticon.es/svg/static/icons/svg/196/196578.svg" alt="Paga con Visa" height="55">
                <img src="https://www.flaticon.es/svg/static/icons/svg/196/196561.svg" alt="Paga con master card"
                  height="55">
              </div>
            </div>
          </div>
        </div>
    
      </footer>
</body>
</html>