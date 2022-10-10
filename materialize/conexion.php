<?php 
$conexion = new mysqli("localhost", "root", "", "Proyecto_");


if($conexion->connect_errno){
	echo "fallo  al conectar a MySQL: (".$conexion-connect_errno.")".$conexion->connect_errno;
}
else{
	echo " conexion a base de datos";
}


 ?>