<?php
	
	// Conexión con MySQL
	include "../database/conexion.php";

	if (isset($_POST['deleteId'])) {
		
		$deleteId = $_POST['deleteId'];
		$sql = "SELECT * FROM imagenes_escuelas WHERE id_img = $deleteId";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$filePath = 'fotos-instalaciones/'.$row['images'];
		$query = "DELETE FROM imagenes_escuelas WHERE id_img = $deleteId";
		if (mysqli_query($con, $query)) {
			unlink($filePath);
		}
	}

?>