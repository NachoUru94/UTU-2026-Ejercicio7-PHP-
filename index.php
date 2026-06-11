<?php
 $nombre = "jose"; //String
 $edad = 31; //Integer
 $miDinero = 1000.50; //Float
 $esMayorDeEdad = false; //Boolean
 $tieneFerrari = null; //sin valor
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
  <h1>Ejercicio 7</h1>
    <p>C:\xampp\htdocs\UTU-2026-Ejercicio7-PHP</p>
    
    <h2><?php echo $nombre; ?></h2>
   
    
    <?php //if else if y else
    if($edad >= 18){
      $mayorDeEdad = true;
    }else if($edad < 18){
      $mayorDeEdad = false;
    }else{
      $edad=null;
    }
    
    switch(true){
      case $edad > 18:
        $mayorDeEdad = true;
        break;
      case $edad < 18:
        $mayorDeEdad = false;
        break;
      default:
        $edad = null;
    }

    for($i = 0; $i < 3; $i++){
      $edad++;
    }

    while($edad < 35){
      $edad++;
    }

      //lo utilisaremos para integrar en un array elementos de diferentes tipos de datos
      $frutas = array("manzana", "banana", "naranja");
      $verduras = ["lechuga", "tomate", "zanahoria", 456, false, null];

    foreach( $frutas as $fruta){
      echo "<h3>" . "Mi fruta es: " . $fruta . "</h3><br>";
    }
        $usuario = [
          "nombre" => "jose",
          "edad" => 31,
        ]
        foreach ($usuario as $clave => $valor){
          echo $clave . " : " . $valor . "<br>";
        }
    ?>

  

  </body>
</html>