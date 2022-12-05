<?php
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$pantalla = $_GET["pantalla"];
$nro_tramite = $_GET["nro_tramite"];

include "conexion.inc.php";
$fechaActual = date('y/m/d h:i');
$sql2="update flujotramite set fechafin='".$fechaActual."' ";
$sql2.="where flujo='".$flujo."' and ";
$sql2.="proceso='".$proceso."' and ";
$sql2.="nro_tramite='".$nro_tramite."' ";
$res2=mysqli_query($con, $sql2);
//$res=mysqli_query($con,$sql2);
/*
$res2= $con->query($sql2);
if($res2) {
    while ($row = mysqli_fetch_assoc($res2)) {
        $ci = $row['ci'];
		$nombre = $row['nombre'];
        $pAp = $row['primer_apellido'];
        $sAp = $row['segundo_apellido'];
        $fecha = $row['fecha'];
    }
}
/**/ 
include $pantalla.".grabar.inc.php";

if (isset($_GET["Siguiente"]))
{
	$sql="select flujo, proceso, proceso_siguiente as procesoselect, tipo, rol, pantalla ";
	$sql.="from flujo ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
if (isset($_GET["Anterior"]))
{
	$sql="select flujo, proceso as procesoselect, proceso_siguiente, tipo, rol, pantalla ";
	$sql.="from flujo ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso_siguiente='".$proceso."'";
}

if (isset($_GET["Si"]))
{
	$sql="select flujo, procesoSI as procesoselect ";
	$sql.="from flujocondicion ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
if (isset($_GET["No"]))
{
	$sql="select flujo, procesoNO as procesoselect ";
	$sql.="from flujocondicion ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}

$res = mysqli_query($con, $sql);
while ($fila= mysqli_fetch_assoc($res))
{	$proceso = $fila["procesoselect"];
}
session_start();
$sql2="insert into flujotramite(flujo, proceso, nro_tramite, fechaini, usuario) ";
$sql2.="values('".$flujo."','".$proceso."','";
$sql2.=$nro_tramite."','".$fechaActual."','".$_SESSION["usuario"]."')";
//mysql_query($sql2);
$res3=mysqli_query($con, $sql2);

$parametros="?flujo=".$flujo;
$parametros.="&proceso=".$proceso;
$parametros.="&nro_tramite=".$nro_tramite;
/** */
//header("Location: flujo.php".$parametros);
?>