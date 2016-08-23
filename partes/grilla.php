<?php
	require_once('clases/Alumno.php');

	$ArrayDePersonas = Alumno::TraerTodasLasPersonas();
	

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
							
					<th>  Nombre     </th>
					<th>  Apellido   </th>
					<th>  Legajo        </th>
					<th> Foto </th>
					<th>  BORRAR     </th>
					<th>  MODIFICAR  </th>
				</tr> 
			</thead>";   	

		foreach ($ArrayDePersonas as $alumnoAux){
		
			echo " 	<tr>

						<td>".$alumnoAux->GetNombre()."</td>
						<td>".$alumnoAux->GetApellido()."</td>
						<td>".$alumnoAux->GetLegajo()."</td>
					<td><img  class='fotoGrilla' src='fotos/".$alumnoAux->GetFoto()."' /></td>

						<td><button class='btn btn-danger' name='Borrar' onclick='Borrar(".$alumnoAux->GetId().")'>   <span class='glyphicon glyphicon-remove-circle'>&nbsp;</span>Borrar</button></td>
						<td><button class='btn btn-warning' name='Modificar' onclick='Modificar(".$alumnoAux->GetId().")'><span class='glyphicon glyphicon-edit'>&nbsp;</span>Modificar</button></td>
					</tr>";
		}	
	echo "</table>";		
?>
