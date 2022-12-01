<?php

	// Database connection 
	include '../database/conexion.php';
	if (isset($_POST['editId'])) {
		$editId = $_POST['editId'];
	}

	if (!empty($editId)) {
		$query  = "SELECT * FROM imagenes_escuelas WHERE id_img = $editId";
		$result = mysqli_query($conexion, $query);
		
		if (mysqli_num_rows($result) > 0) {		
			$output = "";
					
			while($row = mysqli_fetch_assoc($result)) {

				$image1 = 'fotos_instalaciones/'.$row['instalacion_1'];
				$image2 = 'fotos_instalaciones/'.$row['instalacion_2'];
				$image3 = 'fotos_instalaciones/'.$row['instalacion_3'];
					
				$output.="<form id='editForm'>
							<div class='modal-body' style='height: 420px;'>
								<input type='hidden' name='image_id' id='image_id' value='".$row['id_img']."'/>
								<div class='form-group'>
									<div class='custom-file mb-3'>
										<input type='file' class='custom-file-input' name='file_name' id='file_name'>
										<label class='custom-file-label'>Elija la imágen que desea cargar</label>
										<img src='".$image1."' class='img-thumbnail' width='120px' height='120px'/>
									</div>
									<div class='custom-file mb-3'>
										<input type='file' class='custom-file-input' name='file_name' id='file_name'>
										<label class='custom-file-label'>Elija la imágen que desea cargar</label>
										<img src='".$image2."' class='img-thumbnail' width='120px' height='120px'/>
									</div>
									<div class='custom-file mb-3'>
										<input type='file' class='custom-file-input' name='file_name' id='file_name'>
										<label class='custom-file-label'>Elija la imágen que desea cargar</label>
										<img src='".$image3."' class='img-thumbnail' width='120px' height='120px'/>
									</div>
								</div>
							</div>
							<div class='modal-footer'>
								<button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>
								<button type='submit' class='btn btn-success'>Actualizar</button>
							</div>
						</form>";
			}
			echo $output;	
		}
	}

?>