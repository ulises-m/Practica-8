<?php
require("Conexion.php");

$nombre=$_POST["nombre"];
$clave=$_POST["clave"];
$precio=$_POST["precio"];
$descripcion=$_POST["descripcion"];

echo '
<div style="background-color:yellow;color:green">
<h1><center>Producto Guardado en la BD</center></h1>
</div>';

echo "<b>Nombre:</b>".$nombre;
echo "<br>";
echo "<b>Clave:</b>".$clave;
echo "<br>";
echo "<b>Precio:</b>".$precio;
echo "<br>";
echo "<b>Descripcion:</b>".$descripcion;

$insertar = mysqli_query($enlace,"INSERT INTO producto (nombre, clave, precio, descripcion) VALUES ('$nombre','$clave','$precio','$descripcion')");

if (!$insertar){
	echo "</br><h3>Error al guardar</h3></br>";
}else{
	echo "<h3>Guardado con exito !!</h3>";}

	echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=http://localhost/Progra4/Practica8-PHP/Indice.php">';

	//Cerrar conexion a la BD
mysqli_close($enlace);



?>