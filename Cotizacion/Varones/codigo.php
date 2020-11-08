<?php 

error_reporting(0);
  $abrigo=$_POST["abrigos"];
  $polo=$_POST["polos"];
    $pantalon=$_POST["pantalon"];
    $calzado=$_POST["calzado"];
    $can1=$_POST["cantidad1"];
    $can2=$_POST["cantidad2"];
    $can3=$_POST["cantidad3"];
    $can4=$_POST["cantidad4"];
    $extra=0;
    $precio1=0;
    $precio2=0;
    $precio3=0;
    $precio4=0;
    $producto1="";
    $producto2="";
    $producto3="";
    $producto4="";
    $producto1="no seleccionado";
    $producto2="no seleccionado";
    $producto3="no seleccionado";
    $producto4="no seleccionado";
    $pago="";

    
    switch($abrigo){
        
        case 1:
            $producto1="Conjunto elegante para varones";
            $precio1=130.90*$can1;
            break;
        case 2:
          $producto1="Casaca semi-deportiva para caballeros";
            $precio1=29.90*$can1;
            break;
        case 3:
          $producto1="Casaca con capucha para invierno";
            $precio1=49.90*$can1;
            break;
        case 4:
          $producto1="Saco con capucha para varones, ideal para invierno";
            $precio1=69.90*$can1;
            break;
        case 5:
          $producto1="Saco acolchonado para varones.";
            $precio1=69.90*$can1;
            break;
        case 6:
          $producto1="Saco elegante para varones, cuello chino";
            $precio1=89.90*$can1;
            break;
    }

    switch($polo){
        
        
        case 1:
          $producto2="Polo con botones y diseños para varones";
            $precio2=29.90*$can2;
            break;
        case 2:
          $producto2="Polo Manga corta con botones y distintos colores";
            $precio2=35.90*$can2;
            break;
        case 3:
          $producto2="Polo con botones y color entero para varones";
            $precio2=25.90*$can2;
            break;
        case 4:
          $producto2="Polos talla Standar cuello camisero";
            $precio2=29.00*$can2;
            break;
        case 5:
          $producto2="Polos de algodón cuello camisero con diseños.";
            $precio2=38.90*$can2;
            break;
        case 6:
          $producto2="Polos con diseño chispeados y cuello camisero para caballeros";
            $precio2=29.90*$can2;
            break;
    }

    switch($pantalon){
     
        case 1:
          $producto3="Pantalón jean comodos para caballero";
            $precio3=39.90*$can3;
            break;
        case 2:
          $producto3="Pantalón jean clásico para hombres";
            $precio3=29.90*$can3;
            break;
        case 3:
          $producto3="Pantalón jean comodos para caballero";
            $precio3=39.90*$can3;
            break;
        case 4:
          $producto3="Jogger para hombres";
            $precio3=29.90*$can3;
            break;
        case 5:
          $producto3="Pantalón de vestir para hombres- regalo la correa";
            $precio3=35.90*$can3;
            break;
        case 6:
          $producto3="Pantalón drill pitillo para hombres";
            $precio3=49.90*$can3;
            break;
    }

    switch($calzado){
      
        case 1:
          $producto4="Zapatos de vestir a base de cuero volteado";
            $precio4=79.90*$can4;
            break;
        case 2:
          $producto4="Zapatillas deportivas para hombres";
            $precio4=69.90*$can4;
            break;
        case 3:
          $producto4="Zapatillas adidas clásica para varones";
            $precio4=79.99*$can4;
            break;
        case 4:
          $producto4="Zapatillas urbana Puma para varones";
            $precio4=89.90*$can4;
            break;
        case 5:
          $producto4="Zapatos elegantes de vestir para varones suela negra";
            $precio4=99.99*$can4;
            break;
        case 6:
          $producto4="Zapatos elegantes de vestir para varones";
            $precio4=90.00*$can4;
            break;
    }
    $precio=$precio1+$precio2+$precio3+$precio4;

    if(isset($_POST["customRadio"])){
                $pago=$_POST["customRadio"];
            }else{
                $pago="";
            }

     $desc=0;
    if($pago=="credito"){
        $desc=0.012*$precio;
    }else if($pago=="contado"){
        $desc=0.05*$precio;
    }
    $costoEnvio=0;
    $nombreDistrito="";


    
    if($precio==0){
        $precioTotal=0;
    }else{
    $dis=$_POST["distrito"];
    switch($dis){
        case 1:
          $nombreDistrito="Villa el Salvador";
            $costoEnvio=2;
        break;
        case 2:
          $nombreDistrito="San Juan de Miraflores";
            $costoEnvio=5;
        break;
        case 3:
          $nombreDistrito="Chorrrillos";
            $costoEnvio=10;
        break;
        case 4:
          $nombreDistrito="Villa Maria del Triunfo";
            $costoEnvio=10;
        break;
        case 5:
          $nombreDistrito="Pachacamac";
            $costoEnvio=8;
        break;
        case 6:
          $nombreDistrito="Surco";
            $costoEnvio=15;
        break;
    }  
    $precioTotal=($precio-$desc)+$costoEnvio;  
    }


    

?>