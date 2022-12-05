<?php
include "conexion.inc.php";
session_start();
$usuario=$_SESSION["usuario"];
$sql ="SELECT * FROM flujotramite where usuario='$usuario'";//." and pass=".$contr;
$res = mysqli_query($con, $sql);
?>
<table>
<tr>
	<td>Flujo</td>
	<td>proceso</td>
	<td>No.tramite</td>
	<td>fecha inicial</td>
	<td>fecha final</td>
	<td>Ir</td>
</tr>
<?php 
while ($fila= mysqli_fetch_assoc($res))
{
  echo "<tr>";
  echo "<td>".$fila["Flujo"]."</td>";
  echo "<td>".$fila["proceso"]."</td>";
  echo "<td>".$fila["nro_tramite"]."</td>";
  echo "<td>".$fila["fechaini"]."</td>";
  echo "<td>".$fila["fechafin"]."</td>";
  echo "<td><a href='flujo.php?flujo=".$fila["Flujo"]."&proceso=".$fila["proceso"]."&nro_tramite=".$fila["nro_tramite"]."'>Ir</td>";
  //echo $fila["Flujo"]," -> ",$fila["proceso"]," -> ",$fila["nro_tramite"];
  echo "</tr>";
}
?>
</table>