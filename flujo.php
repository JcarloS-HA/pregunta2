<?php
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];
include "conexion.inc.php";
//echo $flujo," -> ",$proceso," -> ",$nro_tramite;
$sql ="SELECT * FROM flujo where flujo='$flujo' and proceso='$proceso'";
$res= $con->query($sql);
if($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $pantalla = $row['pantalla'];
		$tipo = $row['tipo'];
    }
}
include $pantalla.".datos.inc.php";
$sql="select count(*) as cantidad from flujotramite ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."' and ";
$sql.="nro_tramite='".$nro_tramite."'";
$res1= $con->query($sql);
if($res1) {
    while ($row1 = mysqli_fetch_assoc($res1)) {
        $cantidad = $row1['cantidad'];
    }
}
/*
$resultado2=mysql_query($sql);
$fila2=mysql_fetch_array($resultado2);
$cantidad=$fila2["cantidad"];
/**/
?>
<form method="GET" action="motor.php">
	<?php 
	include $pantalla.".inc.php";
	?>
	<input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
	<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
	<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
	<input type="hidden" value="<?php echo $tipo;?>" name="tipo"/>
	<input type="hidden" value="<?php echo $nro_tramite;?>" name="nro_tramite"/>
	<br/>
	<?php

	if ($tipo=="C"){
		?>
		<input type="submit" value="Si" name="Si"/>
		<input type="submit" value="No" name="No"/>
		<?php
	}else{
		if ($cantidad<1) {
			?>
				<input type="submit" value="Anterior" name="Anterior"/>
			<?php
		}
		else{
			?>
				<input type="submit" value="Anterior" disabled="disabled" name="Anterior"/>
			<?php
		}
		?>
			<input type="submit" value="Siguiente" name="Siguiente"/>
		<?php
		?>
	<?php
	}
	?>
</form>


