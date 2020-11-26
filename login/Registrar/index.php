<?php
    session_start();
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
  <link rel="shortcut icon" type="image/x-icon" href="../../img/logo.ico">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <div class="container">
            <a class="navbar-brand" href="../../index.html">
              <img src="../../img/Logo.png" alt="Fashion Point" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="../../index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://fesdy.pe/public/images/productos/1603201679CAT7-20-BAJA.pdf"
                    target="_blank">Catálogo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../Hombres/index.html">Varones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../Mujeres/index.html">Mujeres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../Nosotros/index.html">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../../Contactos/index.html">Contáctenos</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cotización</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="../../Cotizacion/Varones/index.php">Varones</a>
                    <a class="dropdown-item" href="../../Cotizacion/Mujeres/index.php">Mujeres</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="../cuenta.php"><img src="../../img/login.svg" alt="" width="40px" ></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <section class=" text-white text-center">
        <div>
            <h2 id="tituloPrincipal">Mi cuenta</h2>
        </div>
    </section>

      <?php
        if(isset($_POST['registrar'])){
        error_reporting(0);
        $usuario=$_POST['Usuario2'];
        $contraseña=$_POST['Password2'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['Apellidos'];
        $dni=$_POST['dni'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['Direccion'];
        $requisito=0;
        $sexo="";
        $mensaje="";
        $campos=array();

        if(isset($_POST['inlineRadioOptions'])){
            $sexo=$_POST['inlineRadioOptions'];
        }else{
            $sexo="";
        }

        if(empty($usuario)){
            array_push($campos,"* Agregar un nombre de usuario");
        }elseif(strlen($usuario)< 3){
          array_push($campos,"* NOobre de usuario debe tener almenos 3 caracteres");
        }elseif(strlen($usuario)> 15){
          array_push($campos,"* Nombre de usuario muy largo");
      }else{
            $requisito=$requisito+1;
        }

        if(empty($contraseña)){
            array_push($campos,"* Agregar una contraseña");
        }elseif(strlen($contraseña)< 6){
            array_push($campos,"* La contraseña debe tener almenos 6 digitos");
        }else{
            $requisito=$requisito+1;
        }

        if(empty($nombre)){
            array_push($campos,"* Agregar tu nombre");
        }elseif(strlen($nombre)< 3){
          array_push($campos,"* El nombre es muy corto");
        }elseif(strlen($nombre)> 20){
            array_push($campos,"* El nombre es muy largo");
        }elseif(is_numeric($nombre)){
            array_push($campos,"* El nombre no puede ser número");
        }else{
            $requisito=$requisito+1;
        }

        if(empty($apellido)){
            array_push($campos,"* Agregar tu apellido");
        }elseif(strlen($apellido)< 3){
          array_push($campos,"* El apellido es muy corto");
        }elseif(strlen($apellido)> 20){
            array_push($campos,"* El apellido es muy largo");
        }elseif(is_numeric($apellido)){
            array_push($campos,"* El apellido no puede ser número");
        }else{
            $requisito=$requisito+1;
        }
        
        if($sexo==""){
            array_push($campos,"* Selecione su sexo");
        }else{
            $requisito=$requisito+1;
        }

        if(empty($dni)){
            array_push($campos,"* Agregar tu DNI");
        }elseif(strlen($dni)<> 8){
            array_push($campos,"* El DNI debe contener 8 caracteres");
        }elseif(!is_numeric($dni)){
            array_push($campos,"* El DNI deben ser numeros");
        }else{
            $requisito=$requisito+1;
        }

        if(empty($email)){
            array_push($campos,"* Agregar tu Correo Electronico");
        }elseif(!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/',$email)){
            array_push($campos,"* Correo no válido");
        }else{
            $requisito=$requisito+1;
        }

        if(empty($telefono)){
            array_push($campos,"* Agregar tu movil");
        }elseif(strlen($telefono)<> 9){
            array_push($campos,"* El movil debe contener 9 caracteres");
        }elseif(!is_numeric($telefono)){
            array_push($campos,"* El movil debe ser numeros");
        }else{
            $requisito=$requisito+1;
        }
        
        $terminos=$_POST['terminos'];
        if($terminos==""){
            array_push($campos,"* Debe aceptar los términos y condiciones");
        }else{
            $requisito=$requisito+1;
        }
        
        if($requisito>=9){
                $_SESSION['Usuario2']=$_POST['Usuario2'];
        $_SESSION['Password2']=$_POST['Password2'];
           echo "Ingreso";
           header ('location:../cuenta.php');
        }
        
        }
      ?>

      <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <h5 class="reg">Registrarse</h5>
                    <form class="text-center" name="formLogin2" method="post" style="">
                        <div class="error"> <?php
                            error_reporting(0);
                            if(count($campos)>0){
                                for($i=0; $i<count($campos);$i++){
                                    echo "<br>".$campos[$i];
                                }
                            } 
                        ?></div>
                   
                        <div class="form-group">
                            <label for="Usu2">Usuario *</label>
                            <input type="text" class="form-control"  id="Usu2" name="Usuario2" value="<?php error_reporting(0); echo $_POST["Usuario2"]; ?>">
                          </div>
                          <div class="form-group">
                            <label for="Pass2">Contraseña *</label>
                            <input type="password" class="form-control" id="Pass2"  name="Password2" value="<?php error_reporting(0); echo $_POST["Password2"]; ?>">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                              <label for="nombr">Nombres *</label>
                              <input type="name" class="form-control" id="nombr"  name="nombre" value="<?php error_reporting(0); echo $_POST["nombre"]; ?>">
                            </div>
                
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="App">Apellidos *</label>
                                <input type="name" class="form-control" id="App"  name="Apellidos" value="<?php error_reporting(0); echo $_POST["Apellidos"]; ?>">
                            </div>
                          </div>

                          <div class="form-row">
                              <div class="form-group col-md-6 col-sm-12">
                                    <label>Sexo *</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="varon">
                                    <label class="form-check-label" >Váron</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="mujer">
                                    <label class="form-check-label" >Mujer</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-sm-12">
                                <label for="DNI">DNI *</label>
                                <input type="text" class="form-control" id="DNI" name="dni" value="<?php error_reporting(0); echo $_POST["dni"]; ?>" >
                                </div>
                          </div>

                          <div class="form-group ">
                            <label for="mail">Correo Electronico *</label>
                            <input type="email" class="form-control" id="mail" name="email" placeholder="name@example.com" value="<?php error_reporting(0); echo $_POST["email"]; ?>">
                          </div>

                          <div class="form-group">
                            <label for="tel">Teléfono móvil *</label>
                            <input type="name" class="form-control" id="tel" name="telefono" value="<?php error_reporting(0); echo $_POST["telefono"]; ?>">
                          </div>

                          <div class="form-group">
                            <label for="Direcc">Dirección (No es obligatorio)</label>
                            <input type="name" class="form-control" id="Direcc" name="Direccion" minlength="7" value="<?php error_reporting(0); echo $_POST["Direccion"]; ?>">
                          </div>

                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="terminos" id="Check1">
                            <label class="form-check-label" for="Check1"><a href="../AtencionCliente/TerminosCondiciones/index.html" target="_blank">Acepto los términos y condiciones</a></label>
                          </div>

                          <div>
                              <a href="../Ingresar/index.php">¿Ya tienes una cuenta?</a>
                          </div>

                        <button type="submit" class="btn btn-primary" name="registrar">Registrarse</button>

                    </form>
            </div>

            <div class="col-md-6 col-sm-12 text-center">
              <img src="../../img/logo.png" width="100%" style="margin-top: 40%;">
            </div>
        </div>
        <br>
    </div>

    
      <footer class="bg-dark text-white">
        <br>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <img src="../../img/Logo.png" alt="" width="200px">
            </div>
            <div class="col-md-4 col-sm-12">
              <h2 style="font-size: 25px;">Mapa del sitio web</h2>
              <div class="list-group">
                <a href="../../index.html" class="text-white">Inicio</a>
                <a href="../../Hombres/index.html" class="text-white">Varones</a>
                <a href="../../Mujeres/index.html" class="text-white">Mujeres</a>
                <a href="../../Nosotros/index.html" class="text-white">Nosotros</a>
                <a href="../.../Contactos/index.html" class="text-white">Contáctenos</a>
              </div>
    
            </div>
    
            <div class="col-md-4 col-sm-12">
              <h2 style="font-size: 25px;">Atención al cliente</h2>
              <div class="list-group">
                <a href="../../AtencionCliente/TerminosLegales/index.html" class="text-white">Términos legales</a>
                <a href="../../AtencionCliente/TerminosCondiciones/index.html" class="text-white">Términos y condiciones</a>
                <a href="../../AtencionCliente/TiemposEnvio/index.html" class="text-white">Tiempos y costos de envío</a>
                <a href="../../AtencionCliente/Cambios/index.html" class="text-white">Cambios</a>
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
                  target="_blank"><img src="../../img/174855.svg" title="Visitar la pagina de facebook" height="30"></a>
                <br></br>
                <a href="https://www.facebook.com/fashionpoint2405/" target="_blank"><img src="../../img/733547.svg"
                    title="Visitar la pagina de instagram" height="30"></a>
                <br></br>
                <a href="https://api.whatsapp.com/send?phone=51935336479&text=Bienvenido%20a%20Fashion%20Point"
                  title="WhatsApp de Fashion Point" target="_blank"><img src="../../img/733585.svg" height="30"></a>
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