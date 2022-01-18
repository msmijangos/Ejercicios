<?php

$nombres = !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = !empty($_POST['correo']) ? $_POST['correo'] : '';
$numero = !empty($_POST['numero']) ? $_POST['numero'] : '';
$direccion = !empty($_POST['direccion']) ? $_POST['direccion'] : '';
$empresa = !empty($_POST['empresa']) ? $_POST['empresa'] : '';
$nlinea =  !empty($_POST['nlinea']) ? $_POST['nlinea'] : '';
if($nombres&&$correo&&$numero&&$direccion&&$empresa){
	include('conexion.php');
	$registro ="UPDATE usuarios set nombres='$nombres',correo='$correo',numero=$numero,direccion='$direccion',empresa='$empresa'
	WHERE id= $nlinea;";

	$resultado = mysqli_query($conexion,$registro);

}
header('Location: listaok.php');
