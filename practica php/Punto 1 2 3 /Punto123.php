<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica PHP </title>
     <link rel="stylesheet" href="estilos.css">
</head>
<body >
   <header class="cabeza">
    <h1 id="cabeza__titulo">  Taller practico   </h1>
    <h2 id="cabeza__nombre">  Diego Alejandro Castillo Perez </h2>
   </header>
   
   <section class="punto1">
      <h2>Punto 1</h2>
      <p class="descripcion">usar dos funciones cualquiera de php</p>
      <br>
      <p>la primer funcion es la ArrayObject::__construct, esta me permite crear un objeto tipo array 
        dandole como parametro un array
      </p>
      <img src="cp1.png" alt="" class="imagenes">
      <?php
       $frutas=array('pera','manzana','piña');
       $arrayfrutas= new ArrayObject($frutas);
       for ($i=0; $i < 3 ; $i++) { 
       Echo  $arrayfrutas->offsetGet($i),"<br>";
       Echo "<br>";
        }
        ?> 

     <p>segunda funcion Array_push me permite añadir cosas a arrays ejemplo:</p>
     <img src="cp2.png" alt="" class="imagenes">
       <?php
         $frutas=array('pera','manzana','piña');
         array_push($frutas, 'plátano');
         for ($i=0; $i < 4 ; $i++) { 
          Echo  $frutas[$i],"<br>";
           Echo "<br>";
         }
         Echo "<br>"
        ?> 
        
   </section>

   <section class="punto2">
    <h2>Punto 2 </h2>
    <p class="descripcion">Hacer un  Baloto de 1 a 42 y mostrar el numero ganador</p>
      <?php
       $numeroGan=random_int(1,42);
       echo "juego del baloto ","<br>";
       echo "<br>";
       echo "El numero ganador fue: ",$numeroGan;
       echo "<br>";
       ?> 
      <br>
      <br>
   </section>

   <section class="punto3">
     <h2>Punto 3 </h2>
     <p class="descripcion"> en simples lineas de codigo arreglar el problema que se presento en la clase de la zona horaria</p>
     <?php  
       date_default_timezone_set('America/Bogota');
       $fecha_actual = date('Y-m-d H:i:s');
       echo "Fecha y hora actual en Colombia: " . $fecha_actual;
       
       ?> 
   </section>




</body>
</html>