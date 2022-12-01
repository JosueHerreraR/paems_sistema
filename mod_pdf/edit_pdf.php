<?php

	// Database connection 
	include '../database/conexion.php';
	if (isset($_POST['editId'])) {
		$editId = $_POST['editId'];
	}

	if (!empty($editId)) {
		$query  = "SELECT * FROM datos_escuelas WHERE id_escuela = $editId";
		$result = mysqli_query($conexion, $query);
		
		if (mysqli_num_rows($result) > 0) {		
			$output = "";
					
			while($row = mysqli_fetch_assoc($result)) {

				$image1 = 'pdf_feria/'.$row['becas'];
                $image2 = 'pdf_feria/'.$row['oferta_educativa'];
					
				$output.="<form id='editForm'>
							<div class='modal-body' style='height: 200px;'>
								<input type='hidden' name='image_id' id='image_id' value='".$row['id_escuela']."'/>
								<div class='form-group'>
									<div class='custom-file mb-3'>
                                        <label class='custom-file-label'>Elija la imágen que desea cargar</label>
                                        <input type='file' class='custom-file-input' name='file_name' id='file_name'>
                                        // <img src='".$image1."' class='img-thumbnail' width='120px' height='120px'/>
                                        <embed type='application/pdf' width='120px' height='120px' src='".$image1."'/>
									</div>
                                    <div class='custom-file mb-3'>
										<input type='file' class='custom-file-input' name='file_name' id='file_name'>
										<label class='custom-file-label'>Elija la imágen que desea cargar</label>
										// <img src='".$image2."' class='img-thumbnail' width='120px' height='120px'/>
                                        <embed type='application/pdf' width='120px' height='120px' src='".$image2."'/>
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