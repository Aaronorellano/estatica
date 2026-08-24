<?php 
include 'conexion.php';
$resultado = mysqli_query($conexion, "SELECT * FROM actores");
$actores = [];
if ($resultado) {
    while ($actor = mysqli_fetch_assoc($resultado)) {
        $actores[] = $actor;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>AGREGAR UNA PELUCULA NUEVA</h2>
<form action="" method="post">

    nombre de pelicula:
    <input type="text" name="nom_pelicula" value=""><br>

    estreno:
    <input type="text" name="estreno" value=""><br>

    genero:
    <input type="text" name="genero" value=""><br>


     <select name="actores" id="actores">
            <option value="">Seleccione un actor</option>
            <?php foreach ($actores as $actor){ ?>
                <option value="<?php echo $actor['id_actor']; ?>">
                 <?php echo htmlspecialchars($actor['nombre'])." " . htmlspecialchars($actor['apellido'] ); ?>
                 </option>
            <?php }?>
        </select>


    <button type="submit">ingresar pelicula</button>
</form>
</body>
</html>

<?php

require_once "conexion.php"; //Incluimos el archivo php para poder

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//trim sirve para no incluir espacios en cada input.


$nom_peli = trim($_POST['nom_pelicula']);

$estreno = trim($_POST['estreno']);

$genero=trim($_POST['genero']);

$actores=trim($_POST['actores']);



if (!empty($nom_peli) && !empty($estreno) && !empty($genero)) {


$sql = "INSERT INTO pelicula (nombre,estreno,genero,id_actor)

VALUES ('$nom_peli', '$estreno','$genero','$actores')";
mysqli_query($conexion, $sql);//ejecución de consulta como primer

//mysqli_close($conexion);
echo "la pelicula fue ingredas coorrectamente";
} else {
echo "<script>
alert('Campos vacíos');
window.history.back();
</script>";

}
} else {
echo "la pelicula nueva no fue ingresada.";
}
?>

