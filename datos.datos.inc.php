<?php
$sql ="SELECT * FROM persona where ci='123456'";
$res= $con->query($sql);
if($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $ci = $row['ci'];
		$nombre = $row['nombre'];
        $pAp = $row['primer_apellido'];
        $sAp = $row['segundo_apellido'];
        $fecha = $row['fecha'];
    }
}
?>