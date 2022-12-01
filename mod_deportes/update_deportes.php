<?php
	
	//  Conexión con MySQL
	include '../database/conexion.php';

	if (isset($_POST['image_id'])) {
		$image_id = $_POST['image_id'];
	}
	
	if (!empty($_FILES['file_name']['name'])) {

		$fileTmp = $_FILES['file_name']['tmp_name'];
		$allowImg = array('png','jpeg','jpg','webb');
		$fileExnt = explode('.', $_FILES['file_name']['name']);
		$fileActExt   = strtolower(end($fileExnt));
		$newFile1 = 	rand(). '.'. $fileActExt;
		$newFile2 = 	rand(). '.'. $fileActExt;
		$newFile3 = 	rand(). '.'. $fileActExt;
		$destination1 = 'fotos_deportes/'.$newFile1;
		$destination2 = 'fotos_deportes/'.$newFile2;
		$destination3 = 'fotos_deportes/'.$newFile3;

		if (in_array($fileActExt, $allowImg)) {
			if ($_FILES['file_name']['size'] > 0 && $_FILES['file_name']['error']==0) {

				$query = "SELECT * FROM imagenes_escuelas WHERE id_img = '$image_id'";
				$result = mysqli_query($conexion, $query);
				$row = mysqli_fetch_assoc($result);
				$filePath1 = 'fotos_deportes/'.$row['deporte_1'];
                $filePath2 = 'fotos_deportes/'.$row['deporte_2'];
                $filePath3 = 'fotos_deportes/'.$row['deporte_3'];
				
				if (move_uploaded_file($fileTmp, $destination)) {
					$update = "UPDATE imagenes_escuelas SET deporte_1 = '$newFile1', deporte_2 = '$newFile2', deporte_3 = '$newFile3' WHERE id_img = '$image_id'";
					mysqli_query($conexion, $update);
					unlink($filePath1, $filePath2, $filePath3);
				}
			}
		}
	}
		
?>