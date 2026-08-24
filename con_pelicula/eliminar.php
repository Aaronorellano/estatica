<?php
include "conexion.php";
$id = isset($_GET['id']);
if ($id > 0) {
mysqli_query($conn, "DELETE FROM productos WHERE id_eplicula =
$id");
}
header("Location: listar.php");