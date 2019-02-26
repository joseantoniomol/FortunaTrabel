<?php

$conexion = mysqli_connect('mysql.hostinger.es', 'u290590836_music', 'danny0099');
         

$cedula = $_GET['cedula'];

if (!mysqli_select_db($conexion,'u290590836_music')) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

$consulta="SELECT `nombre` FROM `perfil` WHERE `cedula`='$cedula'";

 $query = mysqli_query($conexion, $consulta);

        
        $row = mysqli_fetch_assoc($query);
        
        
          

          echo $row['nombre'];
          
          
          