<?phP
    
    $conexion = mysqli_connect('localhost','root','','agenda');
    if(mysqli_connect_error()){
        die('No se puede conectar a la base de datos'.mysqli_connect_error());
    }
?>
