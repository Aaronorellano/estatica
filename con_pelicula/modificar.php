<?php
include "conexion.php";
$id = isset($_GET['id']);
$resultado = mysqli_query($conexion, "SELECT * FROM peliculas WHERE
id_pelicula = $id");
$pelicula = mysqli_fetch_assoc($resultado);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$pelicula_nom = $_POST['nombre'];
$estreno = $_POST['estreno'];
$genero = $_POST['genero'];
mysqli_query($conn, "UPDATE pelicula
SET nombre='$pelicula_nom', estreno='$estreno',
genro='$estreno'
WHERE id_pelicula=$id");
//header("Location: listar.php");
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar peli</title>
</head>
<body>
<h2>Editar pelicula</h2>
<form method="post">
Nombre: <input type="text" name="nombre" value="<?php echo
$pelicula['nombre']; ?>"><br>
Precio: <input type="text" name="estreno" value="<?php echo
$pelicula['estreno']; ?>"><br>
Categoría: <input type="text" name="genero" value="<?php echo
$pelicula['genero']; ?>"><br>
<button type="submit">Guardar Cambios</button>
</form>
</body>
</html>