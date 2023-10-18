<?php
  switch($_REQUEST){
    case $_REQUEST['radio1']=="suma":
      $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
      echo "La suma es:".$suma;
    break;  
    case $_REQUEST['radio1']=="resta":
      $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "La resta es:".$resta;
    break; 
    case $_REQUEST['radio1']=="multiplicacion":
      $multiplicacion=$_REQUEST['valor1'] * $_REQUEST['valor2'];
      echo "La multiplicacion es:".$multiplicacion;
    break; 
    case $_REQUEST['radio1']=="division":
      if($_REQUEST['valor1']==0 || $_REQUEST['valor2']==0){
        echo "no se puede dividir por cero";
      }
      else{
        $division=$_REQUEST['valor1'] / $_REQUEST['valor2'];
        echo "La division es:".$division;
      }
     
    break; 
  }
?>