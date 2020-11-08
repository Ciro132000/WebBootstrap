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


    if(isset($_POST["customRadio"])){
        $pago=$_POST["customRadio"];
    }else{
        $pago="";
    }
    switch($abrigo){
        
        case 1:
            $producto1="Sacos largos acolchonados para mujeres";
            $precio1=79.90*$can1;
            break;
        case 2:
          $producto1="Casaca térmica con capucha";
            $precio1=59.90*$can1;
            break;
        case 3:
          $producto1="Abrigo largo para damas.";
            $precio1=49.90*$can1;
            break;
        case 4:
          $producto1="Abrigo térmico sin capucha";
            $precio1=79.90*$can1;
            break;
        case 5:
          $producto1="Saco elegante para damas";
            $precio1=69.90*$can1;
            break;
        case 6:
          $producto1="Abrigo acolchonado + una cartera de regalo";
            $precio1=99.99*$can1;
            break;
    }

    switch($polo){
        
        
        case 1:
          $producto2="Puma- polo cuello redondo para mujeres";
            $precio2=49.90*$can2;
            break;
        case 2:
          $producto2="Polo alas de murciélago";
            $precio2=39.90*$can2;
            break;
        case 3:
          $producto2="Polo colo entero y cuello redondo para damas";
            $precio2=29.90*$can2;
            break;
        case 4:
          $producto2="Polo ralph lauren para mujeres";
            $precio2=69.90*$can2;
            break;
        case 5:
          $producto2="Polo con botones y cuello chino para damas";
            $precio2=49.90*$can2;
            break;
        case 6:
          $producto2="Polo elegante con diseños para damas";
            $precio2=59.90*$can2;
            break;
    }

    switch($pantalon){
     
        case 1:
          $producto3="Pantalón jean alicrado para mujeres";
            $precio3=69.90*$can3;
            break;
        case 2:
          $producto3="Pantalón jean alicrado para mujeres con diseños en la basta";
            $precio3=59.90*$can3;
            break;
        case 3:
          $producto3="Pantalón jean clásico para mujeres";
            $precio3=29.90*$can3;
            break;
        case 4:
          $producto3="Pantalón de vestir para mujeres";
            $precio3=29.90*$can3;
            break;
        case 5:
          $producto3="Pantalón jean alicrado con poco razgados para mujeres";
            $precio3=29.90*$can3;
            break;
        case 6:
          $producto3="Pantalón jean alicrado para mujeres con diseños en la basta y diseños laterales";
            $precio3=29.90*$can3;
            break;
    }

    switch($calzado){
      
        case 1:
          $producto4="Tacones elegantes para damas";
            $precio4=89.90*$can4;
            break;
        case 2:
          $producto4="Zapatillas AIR deportivas para damas";
            $precio4=69.90*$can4;
            break;
        case 3:
          $producto4="Zapatillas deportivas Nike para damas";
            $precio4=120.90*$can4;
            break;
        case 4:
          $producto4="Tacones clásicos para damas";
            $precio4=79.00*$can4;
            break;
        case 5:
          $producto4="Zapatillas convencionales deportivas para damas";
            $precio4=49.90*$can4;
            break;
        case 6:
          $producto4="Zapatilla casual para damas, suela blanca";
            $precio4=59.90*$can4;
            break;
    }
    $precio=$precio1+$precio2+$precio3+$precio4;
    $desc=0;
    if($pago=="credito"){
        $desc=0.012*$precio;
    }else if($pago=="contado"){
        $desc=0.05*$precio;
    }

    $nombreDistrito="";
    $costoEnvio=0;
    

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