<?php
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$pAp=$_GET["pAp"];
$sAp=$_GET["sAp"];
$fecha=$_GET["fecha"];
//echo $ci," - ",$nombre," - ",$pAp," - ",$sAp," - ",$fecha;
$sql="UPDATE persona SET nombre='$nombre', primer_apellido='$pAp',segundo_apellido='sAp' ,fecha='$fecha' where ci='$ci'";
$resultadofi=mysqli_query($con, $sql);
?>