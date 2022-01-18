<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar usuario</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Registrar usuario</div>
        <div class="contenido">
            <form action="registra.php" method='post'>
            <label for="i1">Nombre</label>
            <input type="text" id="i1" name="nombre">
            <br>
            <label for="i2">Correo</label>
            <input type="text" id="i2" name="correo">
            <br>
            <label for="i3">Numero</label>
            <input type="number" id="i3" name="numero">
            <br>
            <label for="i4">Direccion</label>
            <input type="text" id="i4" name="direccion">
            <br>
            <label for="i5">Empresa</label>
            <input type="text" id="i5" name="empresa">
            <br>
            <input type="submit" value="registrar">
            </form>

        </div>
    </div>
</body>
</html>
