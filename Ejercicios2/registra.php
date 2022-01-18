<?php
$nombres = !empty($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = !empty($_POST['correo']) ? $_POST['correo'] : '';
$numero = !empty($_POST['numero']) ? $_POST['numero'] : '';
$direccion = !empty($_POST['direccion']) ? $_POST['direccion'] : '';
$empresa = !empty($_POST['empresa']) ? $_POST['empresa'] : '';

if($nombres&&$correo&&$numero&&$direccion&&$empresa){
    include('conexion.php');
    $consulta=<<<FIN
    insert into usuarios
    (nombres,correo,numero,direccion,empresa)
    values
    ('$nombres','$correo','$numero','$direccion','$empresa');

FIN;
    if(!mysqli_query($conexion,$consulta)){
        die('No se pudo agregar el registro');
    }
}
header('Location: listaok.php');
