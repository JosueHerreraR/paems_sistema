<?php
	
	//  Conexión con MySQL
	include '../database/conexion.php';

	if (isset($_POST['image_id'])) {
		$image_id = $_POST['image_id'];
	}
	
	if (!empty($_FILES['file_name']['name'])) {

		$fileTmp = $_FILES['file_name']['tmp_name'];
		$allowImg = array('png','jpeg','jpg','web');
		$fileExnt = explode('.', $_FILES['file_name']['name']);
		$fileActExt   = strtolower(end($fileExnt));
		$newFile = 	rand(). '.'. $fileActExt;
		$destination = 'fotos_logos/'.$newFile;

		if (in_array($fileActExt, $allowImg)) {
			if ($_FILES['file_name']['size'] > 0 && $_FILES['file_name']['error']==0) {

				$query = "SELECT * FROM imagenes_escuelas WHERE id_img = '$image_id'";
				$result = mysqli_query($conexion, $query);
				$row = mysqli_fetch_assoc($result);
				$filePath = 'fotos_logos/'.$row['images'];
				
				if (move_uploaded_file($fileTmp, $destination)) {
					$update = "UPDATE imagenes_escuelas SET logo_escolar = '$newFile' WHERE id_img = '$image_id'";
					mysqli_query($conexion, $update);
					unlink($filePath);
				}
			}
		}
	}
		
?>