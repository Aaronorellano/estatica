<?php 
    $servidor = 'localhost';
    $nombre_bd = 'control de peliculas';
    $usuario = 'root';//por defecto root
    $password ='';//por defecto vacía ('')

    $conexion = mysqli_connect($servidor,$usuario,$password,$nombre_bd);

    if (!$conexion) {//si la conexión falla, lanzamos un error.
    die("Error de conexión: " . mysqli_connect_error());
}
// 3. Definir el juego de caracteres
    mysqli_set_charset($conexion, "utf8mb4");
    echo "Conexión exitosa ";
// 4. Cerrar la conexión
   // mysqli_close($conexion);


?>