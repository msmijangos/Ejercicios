<?php

require "conexion.php";

$numElementos = 5;

// Recogemos el parametro pag, en caso de que no exista, lo seteamos a 1
if (isset($_GET['pag'])) {
    $pagina = $_GET['pag'];
} else {
    $pagina = 1;
}

// (($pagina - 1) * $numElementos) me indica desde donde debemos empezar a mostrar registros
$sql = "SELECT * FROM usuarios LIMIT " . (($pagina - 1) * $numElementos)  . "," . $numElementos;

// Ejecutamos la consulta
$resultado = mysqli_query($conexion, $sql);

// Contamos el número total de registros
$sql = "SELECT count(*) as num_personas FROM usuarios";

// Ejecutamos la consulta
$resultadoMaximo = mysqli_query($conexion, $sql);

// Recojo el numero de registros de forma rápida
$maximoElementos = mysqli_fetch_assoc($resultadoMaximo)['num_personas'];

$tabla =<<<FIN
<table>
<tr><th>Nombres</th><th>Correo</th><th>Numero</th><th>Direccion</th><th>Empresa</th><th colspan="2">Accion</th></tr>
FIN;



    while($registro=mysqli_fetch_assoc($resultado)){
        $tabla.='<tr>';
        $tabla.="<td>{$registro['nombres']}</td>";
        $tabla.="<td>{$registro['correo']}</td>";
        $tabla.="<td>{$registro['numero']}</td>";
        $tabla.="<td>{$registro['direccion']}</td>";
        $tabla.="<td>{$registro['empresa']}</td>";
        $tabla.="<td><a href=borrar.php?id={$registro['id']}>Borrar</a></td>";
        $tabla.="<td><a href=editar.php?id={$registro['id']}>Editar</a></td>";
        $tabla.='</tr>';
    }
    $tabla.='</table>';
    ?>

</table>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>lista</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Agenda</div>
        <div class="contenido">
        <div class="tabla">
        <?php echo $tabla; ?>
        <p>
        <a href="registrar.php">Registrar</a>
        </p>
        </div>
        <div>
  <?php
  // Si existe el parametro pag
  if (isset($_GET['pag'])) {
      // Si pag es mayor que 1, ponemos un enlace al anterior
      if ($_GET['pag'] > 1) {
          ?>
          <a href="listaok.php?pag=<?php echo $_GET['pag'] - 1; ?>"><button>Anterior</button></a>
      <?php
              // Sino deshabilito el botón
          } else {
              ?>
          <a href="#"><button disabled>Anterior</button></a>
      <?php
          }
          ?>

  <?php
  } else {
      // Sino deshabilito el botón
      ?>
      <a href="#"><button disabled>Anterior</button></a>
      <?php
  }



  // Si existe la paginacion
  if (isset($_GET['pag'])) {
      // Si el numero de registros actual es superior al maximo
      if ((($pagina) * $numElementos) < $maximoElementos) {
          ?>
      <a href="listaok.php?pag=<?php echo $_GET['pag'] + 1; ?>"><button>Siguiente</button></a>
  <?php
          // Sino deshabilito el botón
      } else {
          ?>
      <a href="#"><button disabled>Siguiente</button></a>
  <?php
      }

      ?>

  <?php
      // Sino deshabilito el botón
  } else {
      ?>
      <a href="listaok.php?pag=2"><button>Siguiente</button></a>
  <?php
  }


  ?>


</div>
        </div>
    </div>
</body>
</html>
