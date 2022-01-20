<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Login.php</title>
</head>
<body>
<?php
if(isset($_SESSION['nombre'])){
echo "<p>Has iniciado sesion como: " . $_SESSION['nombre'] . "";
echo "<p>Tienes un presupuesto de: " . $_SESSION['presupuesto'] . "";
echo "<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>";
echo "<br><p><a href='Compras.php'>Ir a la pagina de compras</a>";
}else {
?>
<h2>Creando la sesion</h2>
<form action="Compras.php" method="POST">
<p>Nombres:</p>
<p><input type="text" placeholder="Ingrese su Nombre" name="nombre" required/></p>
<p><input type="number" placeholder="Ingrese su Presupuesto" name="presupuesto" required/></p>
<p><input type="submit" value="Crear Sesion" /></p>
</form>
<?php
}
?>

</body>
</html>
