<?php
    session_start();
    if(isset($_SESSION['id_usuario']) && isset($_SESSION['usuario'])){
?>

<?php

	// Database connection 
	include '../database/conexion.php';

	$sql_usuario = "SELECT * FROM usuarios WHERE usuario = '$_SESSION[usuario]'";
    $resultado_usuario = mysqli_query($conexion, $sql_usuario);
    $urow = mysqli_fetch_array($resultado_usuario);
    $escuela_id = $urow['escuela_id']; 

	$query = "SELECT * FROM datos_escuelas WHERE id_escuela = $escuela_id";
	$result = mysqli_query($conexion, $query);
	$output = "";

	if (mysqli_num_rows($result) > 0) {
		$output .= "<table class='table table-striped'>";
		$output .= "<thead>
			        <tr style='background-color: #7F7C7F; color: white;'>
			          <th>Nro.</th>
			          <th>PDF</th>
			          <th>Editar</th>
			          <th>Borrar</th>
			        </tr>
			      </thead>";
		while ($row = mysqli_fetch_assoc($result)) {
		$images1 = 'pdf_feria/'. $row['becas'];
		$images2 = 'pdf_feria/'. $row['oferta_educativa'];
		$output .=  "<tr>
			          <td>".$row["id_escuela"]."</td>
			          <td><embed type='application/pdf' width='80px' height='80px' src='".$images1."'/></td>
			          <td><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#exampleModal' data-id='".$row["id_escuela"]."'>Editar</button></td>
			          <td><button type='button' class='btn btn-danger btn-sm delete-btn' data-id='".$row["id_escuela"]."'>Borrar</button></td>
			        </tr>
					<tr>
			          <td>".$row["id_escuela"]."</td>
					  <td><embed type='application/pdf' width='80px' height='80px' src='".$images2."'/></td>
			          <td><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#exampleModal' data-id='".$row["id_escuela"]."'>Editar</button></td>
			          <td><button type='button' class='btn btn-danger btn-sm delete-btn' data-id='".$row["id_escuela"]."'>Borrar</button></td>
			        </tr>";
		}
		$output .="</tbody>
    			</table>";
    	echo $output;
	}else{
		echo "<hr><h5 style='text-align:center'>No se ha encontrado ninguna imagen</h5>";
	}

?>

<?php
    } else{
        header ("location: ../login.php");
        exit();
    }
?>