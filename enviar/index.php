<?php
include('../conexion.php');
if (isset($_POST['btn'])) {
	$bytesfile = file_get_contents($_FILES['txtimg']['tmp_name']);
	$comentario = $_POST['txtcontent'];
	$sql = "INSERT img(img_comentario, img_contenido) VALUES (?,?)";
	$stm = $conexion->prepare($sql);
	$stm->bind_param('ss', $comentario, $bytesfile);
	if($stm->execute()){
		echo "<script type='text/javascript'>alert('Imagen subida! :)');</script>";
	}
}
?>
<form method="POST" action="" enctype="multipart/form-data">
	<label>Ingresa comentario</label>
	<input type="text" name="txtcontent">
	<br> <br>
	<label>Ingresa imagen</label>
	<input type="file" accept="image/jpeg, image/jpg, image/gif, image/png" name="txtimg">
	<br><br>	
	<button type="submit" name="btn">Agregar</button>
</form>

<button onclick="doSomething()">Ver imagenes guardadas</button>


<script>
    function doSomething(){
      window.location.href = "../recibir/";
    }
</script>