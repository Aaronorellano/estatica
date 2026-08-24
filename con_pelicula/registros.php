<?php
include "conexion.php";
$resultado = mysqli_query($conexion, "SELECT peli.id_pelicula as id_peli, peli.nombre, peli.estreno, ac.nombre as nom_actor, ac.apellido as ape_actor FROM pelicula as peli 
INNER join actores as ac on peli.id_actor=ac.id_actor");
?>

<?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
<td><?php echo $fila['id_pelicula']; ?></td>
<td><?php echo $fila['estreno']; ?></td>
<td><?php echo $fila['genero']; ?></td>
<td><?php echo $fila['nom_actor']; ?></td>
<td><?php echo $fila['ape_actor']; ?></td>
<td>


    
</td>
</tr>
<?php } ?>
</table>
</body>
</html>