<?php
$usu=$_GET["usu"];
$cont=$_GET["con"];
include "conexion.inc.php";
$contr=md5($cont);
//echo $usu,"  --  ",$contr,"  -  > ";
$query ="SELECT * FROM usuario where user=".$usu;//." and pass=".$contr;
$res = mysqli_query($con, $query);
//$rol='';
if($res){
	while ($mostrar = mysqli_fetch_assoc($res)) {
		$rol=$mostrar['rol'];
	}
}
//echo ' - -> ',$rol;
/*
if(mysqli_num_rows($res)==0){
	?>
	<script>
		alert("El Usuario  <?php echo $usu;?>  no existe");
		location.href='indexcontrol.php';
	</script>
	<?php
}else{*/
	session_start();
	$_SESSION["usuario"]=$usu;
	$_SESSION["rol"]=$rol;
	if ($rol=='alumno')
	{
		header("Location: bentrada.php");
		echo "alumno";
		exit;
	}
	if ($rol=='secretario')
	{
		echo "secre";
		header("Location: bentrada.php");
		exit;
	}


//}
/** */
?>


