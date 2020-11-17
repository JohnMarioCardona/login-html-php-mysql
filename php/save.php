<?php

/**
 * Cultura General
 * 
 * Es muy importante etiquetar siempre los documentos web en forma explícita. 
 * HTTP 1.1 dice que el charset predeterminado es ISO-8859-1. Sin embargo, 
 * existen demasiados documentos sin etiquetar en otras codificaciones. 
 * Por lo tanto, los exploradores utilizan la codificación preferida del 
 * lector cuando no exista ningún parámetro charset explícito.
 *  
 */
    header("Content-Type: text/html;charset=utf-8");
  
 
     $user = $_POST["user_name"];
     $pass = $_POST["pass"];
     echo $user.' '.$pass;
 

     $conexion = mysqli_connect("localhost", "root", "", "logeando");
     mysqli_query($conexion,"SET NAMES 'utf8'");

     $consulta = "SELECT * FROM usuarios ";
     $resultado = mysqli_query($conexion, $consulta);

     

     while($row = $resultado->fetch_assoc()){
        extract($row);  
    }
  
  echo $name;
    //  Terminar la conexion con la base de datos 
    mysqli_close($conexion);
 