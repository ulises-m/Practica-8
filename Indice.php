<!DOCTYPE HTML>
<html>
<head> 
<title>Catalogo de Productos</title>
</head>
<body>

<div style="background-color:yellow;color:green">
<h1><center>Catalogo de Productos</center></h1>
</div>

<?php
require("Conexion.php");
$i=0;

$result = mysqli_query($enlace,"SELECT * FROM producto");

while($row = mysqli_fetch_array($result))
  {

echo "<table border='3' cellspacing='5'>";
echo "<tr align='center'>";
echo "<td>"."ID"."</td>";
echo "<td>"."Nombre"."</td>";
echo "<td>"."Clave"."</td>";
echo "<td>"."Precio"."</td>";
echo "</tr>"; 


while($row = mysqli_fetch_array($result))
  {
echo "<tr align='center'>";
echo "<td>".$row['idproducto']."</td>";
echo "<td>".$row['nombre']."</td>";
echo "<td>".$row['clave']."</td>";
echo "<td>".$row['precio']."</td>";
echo "</tr>"; 
}
 echo "</table>";
  }
mysqli_close($enlace);
?>
</br>
<input type="button" onclick=" location.href='http://localhost/Progra4/Practica8-PHP/Agregar.html'" value="Agregar Producto" name="Agregar"/> 
</body>
</html>