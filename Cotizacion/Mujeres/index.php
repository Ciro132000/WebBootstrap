<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashion Point</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../../img/logo.ico">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
      <div class="container">
        <a class="navbar-brand" href="index.html">
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
                   <a class="dropdown-item" href="../Varones/index.php">Varones</a>
                   <a class="dropdown-item" href="index.php">Mujeres</a>
                </div>
            </li>
            <li class="nav-item">
              <a href="../../login/cuenta.php"><img src="../../img/login.svg" alt="" width="40px" ></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<br>
  <section class=" text-center" style="background: linear-gradient(70deg, pink, white); height: 50px;">
        <div>
            <h2 id="tituloPrincipal">MUJERES</h2>
        </div>
    </section>
<br>
<div class="container" style="background: #CECECF; border-radius: 20px;">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <div class="form-row">
            <div class="col-md-6 col-sm-12">
                <label for="abrigos">Abrigos</label>
                    <select class="custom-select" name="abrigos" id="abrigos">
                        <option value="0">---------</option>
                        <option value="1">Sacos largos acolchonados para mujeres</option>
                        <option value="2">Casaca térmica con capucha</option>
                        <option value="3">Abrigo largo para damas.</option>
                        <option value="4">Abrigo térmico sin capucha</option>
                        <option value="5">Saco elegante para damas</option>
                        <option value="6">Abrigo acolchonado + una cartera de regalo</option>
                    </select>
            </div>

            <div class="col-md-6 col-sm-12">
                <label for="cantidad1">cantidad</label>
                    <select class="custom-select" name="cantidad1" id="cantidad1">
                        <option value="0">---------</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
            </div>
     </div>

     <div class="form-row">
            <div class="col-md-6 col-sm-12">
                <label for="polos">Polos</label>
                    <select class="custom-select" name="polos" id="polos">
                        <option value="0">----------</option>
                        <option value="1">Puma- polo cuello redondo para mujeres</option>
                        <option value="2">Polo alas de murciélago</option>
                        <option value="3">Polo colo entero y cuello redondo para damas</option>
                        <option value="4">Polo ralph lauren para mujeres</option>
                        <option value="5">Polo con botones y cuello chino para damas</option>
                        <option value="6">Polo elegante con diseños para damas</option>
                    </select>
            </div>

            <div class="col">
                <label for="col-md-6 col-sm-12">cantidad</label>
                    <select class="custom-select" name="cantidad2" id="cantidad2">
                        <option value="0">---------</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
            </div>
     </div>

     <div class="form-row">
            <div class="col-md-6 col-sm-12">
                <label for="pantalon">Pantalón</label>
                    <select class="custom-select" name="pantalon" id="pantalon">
                        <option value="0">----------</option>
                        <option value="1">Pantalón jean alicrado para mujeres</option>
                        <option value="2">Pantalón jean alicrado para mujeres con diseños en la basta</option>
                        <option value="3">Pantalón jean clásico para mujeres</option>
                        <option value="4">Pantalón de vestir para mujeres</option>
                        <option value="5">Pantalón jean alicrado con poco razgados para mujeres</option>
                        <option value="6">Pantalón jean alicrado para mujeres con diseños en la basta y diseños laterales</option>
                    </select>
            </div>

            <div class="col-md-6 col-sm-12">
                <label for="cantidad3">cantidad</label>
                    <select class="custom-select" name="cantidad3" id="cantidad3">
                        <option value="0">---------</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
            </div>
     </div>

     <div class="form-row">
            <div class="col-md-6 col-sm-12">
                <label for="calzado">Calzado</label>
                    <select class="custom-select" name="calzado" id="calzado">
                        <option value="0">----------</option>
                        <option value="1">Tacones elegantes para damas</option>
                        <option value="2">Zapatillas AIR deportivas para damas</option>
                        <option value="3">Zapatillas deportivas Nike para damas</option>
                        <option value="4">Tacones clásicos para damas</option>
                        <option value="5">Zapatillas convencionales deportivas para damas</option>
                        <option value="6">Zapatilla casual para damas, suela blanca</option>
                    </select>
            </div>

            <div class="col-md-6 col-sm-12">
                <label for="cantidad4">cantidad</label>
                    <select class="custom-select" name="cantidad4" id="cantidad4">
                        <option value="0">---------</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
            </div>
     </div>
        <br><br>
        <h5>Forma de pago</h5>
        <div class="custom-control custom-radio ">
            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="credito" required>
            <label class="custom-control-label" for="customRadio1">Crédito</label>
            <small><br>Se aplica un descuento del 12 % sobre el total de la compra</small>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="contado" required>
            <label class="custom-control-label" for="customRadio2">Contado</label>
            <small><br>Se aplica un descuento del 5 % sobre el total de la compra</small>
        </div>
        <br><br>
        <h5>Distrito de envío</h5>
        <select class="custom-select" name="distrito" id="distrito" required>
            <option selected disabled value="">---------</option>
            <option value="1">Villa el salvador</option>
            <option value="2">San Juan de miraflores</option>
            <option value="3">Chorrillos</option>
            <option value="4">Villa maría del triunfo</option>
            <option value="5">Pachacamac</option>
            <option value="6">Surco</option>
        </select>
        <br>
        <br>
        <button name="enviar" type="submit" class="btn btn-primary" onclick="validar()">Calcular</button>
        <br><br>
    </form>
</div>

<script>
  function validar(){
    var abrigos=document.getElementById(`abrigos`);
    var polos=document.getElementById(`polos`);
    var pantalon=document.getElementById(`pantalon`);
    var calzado=document.getElementById(`calzado`);
    var c1=document.getElementById(`cantidad1`);
    var c2=document.getElementById(`cantidad2`);
    var c3=document.getElementById(`cantidad3`);
    var c4=document.getElementById(`cantidad4`);

    if (abrigos.value==0 && polos.value==0 && pantalon.value==0 && calzado.value==0){
      alert ("No selecciono ningun producto, vuelva a intentarlo por favor");
    }else if(c1.value==0 && c2.value==0 && c3.value==0 && c4.value==0 ){
      alert ("No selecciono ninguna cantidad para el producto, vuelva a intentarlo por favor");
    }else{
      confirm ("Sus resultados se mostraran en la tabla inferior");
    }
  }
</script>

<?php 
  include ("codigo.php")
?>

  <div class="container text-center">
    <h3>Datos de la selección</h3>
    <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Abrigo</th>
      <td>
      <?php 
            echo $producto1;
          ?> 
      </td>
      <td>
      <?php 
              echo $can1;            
          ?>  
      </td>
      <td>
      <?php 
              echo "S/.".$precio1;  
          ?>  
      </td>
    </tr>
    <tr>
      <th scope="row">Polo</th>
      <td>
      <?php 
            echo $producto2;
          ?> 
      </td>
      <td>
      <?php 
              echo $can2;
          ?>  
      </td>
      <td>
      <?php 
              echo "S/.".$precio2;
          ?>  
      </td>
    </tr>
    <tr>
      <th scope="row">Pantalón</th>
      <td>
      <?php 
            echo $producto3;
          ?> 
      </td>
      <td>
      <?php 
              echo $can3;   
          ?>  
      </td>
      <td>
      <?php 
              echo "S/.".$precio3;
          ?>  
      </td>
    </tr>
    <tr>
      <th scope="row">Calzado</th>
      <td>
      <?php 
            echo $producto4;
          ?> 
      </td>
      <td>
      <?php 
              echo $can4;        
          ?>  
      </td>
      <td>
      <?php 
              echo "S/.".$precio4;
          ?>  
      </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td><strong>total</strong></td>
      <td><?php 
              echo "S/.".$precio;   
          ?> </td>
  </tbody>
</table>
  </div>

  <div class="container text-center">
  <table class="table table-striped">
    <h3>Datos de la facturación</h3>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Tipo de pago</th>
      <th scope="col">Desct. por T. pago</th>
      <th scope="col">Distrito</th>
      <th scope="col">Importe por envío</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
      <?php 
            echo $pago;
          ?>
      </th>
      <td>
      <?php
            echo "S/.".$desc;
          ?>
      </td>
      <td>
      <?php 
            echo $nombreDistrito;
          ?>
      </td>
      <td>
      <?php 
            echo "S/.".$costoEnvio;
          ?>
      </td>
      <td>
      <?php 
            echo "S/.".$precioTotal;
          ?> 
      </td>
    </tr>
  </tbody>
</table>
<div>
  <p>
    *El precio de los productos es estable independiente de la talla o color. <br>
    *Si usted desea comprar productos adicionales el costo de envio es unico por toda la compra. <br>
    *Si desea saber más sobre el envío, puede ver la guia detallada en la seccion "Atención al cliente" (ubicado en el pie de página). 
  </p>
</div>

<button name="comprar" type="submit" class="btn btn-primary" onclick="comprar()">Comprar</button>
  </div>

  <script>
    function comprar(){
    alert ("Sera redirigido(a) a la ventana de compras para culminar con los detalles de su compra");
  }
  </script>

  <br><br>
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
            <a href="../../Contactos/index.html" class="text-white">Contáctenos</a>
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