<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
include('conexion.php');
?>
<table>
	<thead>
		<th>Imagen</th>
		<th>Comentario</th>
	</thead>
	<tbody>
		<?php
			$sql = "SELECT * FROM img";
			$stm = $conexion->query($sql);
			while ($datos = $stm->fetch_object()){
			?>
				<tr>
					<td><img width="300px" src="data:image/jpeg;base64, <?php echo base64_encode($datos->img_contenido); ?>"></td>
					<td><?php echo $datos->img_comentario; ?></td>
				</tr>
			<?php
			}
		?>
	</tbody>
</table>

<button onclick="doSomething()">Subir imagenes</button>


<script>
    function doSomething(){
      window.location.href = "../enviar/";
    }
</script>