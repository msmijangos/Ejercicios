<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Compra</title>
</head>
<body>
<h2>Ingrese productos a Comprar</h2>
<p>
<?php
if(isset($_POST['nombre'])){
if(isset($_POST['precio']))
if(floatval($_SESSION['presupuesto'])==0||floatval($_SESSION['presupuesto'])<$_POST['precio'])
{
  echo "<script>
               alert('Fondos insuficientes. Se cerrara la sesion');
               window.location= 'CerrarSesion.php'
   </script>";

}
//$_SESSION['presupuesto'] = floatval($_POST['presupuesto'])-floatval($_POST['precio']);
$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['presupuesto'] = $_POST['presupuesto'];
echo "Bienvenido! Has iniciado sesion como:<b> ".$_POST['nombre']."</b>";
echo "<br\n>";
echo "Tienes un presupuesto de:<b> ".$_POST['presupuesto']."</b>";
?>
<form action="Compras.php" method="POST">
<p>Producto a Comprar:</p>
<p><input type="text" placeholder="Nombre del producto" name="producto" required/></p>
<p><input type="number" placeholder="Ingrese el precio" name="precio" required/></p>
<p><input type="submit" value="Comprar" /></p>
</form>
<?php
}else{
if(isset($_SESSION['nombre'])){
//echo "Has iniciado Sesion como: ".$_SESSION['nombre'];
if(isset($_POST['precio']))
{
$preciook=$_POST['precio'];
if(floatval($_SESSION['presupuesto'])==0||floatval($_SESSION['presupuesto'])<$_POST['precio'])
{
  echo "<script>
               alert('Fondos insuficientes. Se cerrara la sesion');
               window.location= 'CerrarSesion.php'
   </script>";

}
$_SESSION['presupuesto'] = floatval($_SESSION['presupuesto'])-floatval($preciook);
$_SESSION['nombre'] = $_SESSION['nombre'];
$_SESSION['presupuesto'] = $_SESSION['presupuesto'];

}
echo "Bienvenido! Has iniciado sesion como:<b> ".$_SESSION['nombre']."</b>";
echo "<br\n>";
echo "Tienes un presupuesto de:<b> ".$_SESSION['presupuesto']."</b>";
?>
<form action="Compras.php" method="POST">
<p>Producto a Comprar:</p>
<p><input type="text" placeholder="Nombre del producto" name="producto" required/></p>
<p><input type="number" placeholder="Ingrese el precio" name="precio" required/></p>
<p><input type="submit" value="Comprar" /></p>
</form>
<?php
}else{
	// Si la sesion expiro o no se creo  mostraremos el siguiente mensaje
echo "Acceso Restringido";
}
}
?></p>
<br>
<p><a href="Login.php">Ir a la página inicial</a></p>
<br>
<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>
</body>
</html>
