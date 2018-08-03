<?php 
	include_once 'funciones/funciones.php';

	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$mensaje = $_POST['mensaje'];
	$contenido = $_POST['contenido'];
 	$ID_reflexiones = $_POST['ID_reflexiones'];
	$fecha = date('Y-m-d H:i:s');

if ($_POST['registro'] == 'nuevo'){

	/*
	$respuesta = array(
		'post' => $_POST,
		'file' => $_FILES
	);
	die(json_encode($respuesta));
	*/

	$directorio = "../img/reflexiones/";
	if(!is_dir($directorio)){
		mkdir($directorio, 0755, true); //permisos/recursivo
	}

	//moviendo la imagen de la ubicacion temporal a la ubicacion hash_final(context)
	if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio.$_FILES['archivo_imagen']['name'])){
		$imagen_url = $_FILES['archivo_imagen']['name'];
		$imagen_resultado = "Se subió correctamente la imagen";
	}else{
		$respuesta = array(
			'respuesta' => error_get_last()
		);
	}

	try {	
		$stmt = $conn->prepare("INSERT INTO reflexiones (titulo, autor, imagen, mensaje, fecha, contenido) VALUES (?,?,?,?,?,?)");
		$stmt->bind_param("ssssss", $titulo, $autor, $imagen_url, $mensaje, $fecha, $contenido);
		$stmt->execute();

		$id_devocional = $stmt->insert_id;

		if ($stmt->affected_rows) {//stmt->affected_rows
		 	$respuesta = array(
		 		'respuesta'=> 'exito',
		 		'ID_reflexiones'=> $id_devocional,
		 		'resultado_imagen' => $imagen_resultado
		 	);
		}else{
		 	$respuesta = array(
		 		'respuesta'=> 'error'
		 	);
		}
		$stmt->close();
		$conn->close();
	} catch (Exception $e) {
		$respuesta = array(
			'respuesta' => $e->getMessage()
			//echo "Error: " . $e->getMessage();			
		);
	}
	die(json_encode($respuesta)); 	
}

if ($_POST['devocional'] == 'actualizar'){

	$directorio = "../img/reflexiones/";
	if(!is_dir($directorio)){
		mkdir($directorio, 0755, true); //permisos/recursivo
	}

	//moviendo la imagen de la ubicacion temporal a la ubicacion hash_final(context)
	if(move_uploaded_file($_FILES['archivo_imagen']['tmp_name'], $directorio.$_FILES['archivo_imagen']['name'])){
		$imagen_url = $_FILES['archivo_imagen']['name'];
		$imagen_resultado = "Se subió correctamente la imagen";
	}else{
		$respuesta = array(
			'respuesta' => error_get_last()
		);
	}

	try {
		if ($_FILES['archivo_imagen']['size'] > 0) {
			//con imagen
			$stmt  = $conn->prepare('UPDATE reflexiones SET titulo = ?, mensaje = ?, contenido = ?, fecha = ?, autor = ?, imagen = ? WHERE ID_reflexiones = ?');
			$stmt->bind_param("ssssssi", $titulo, $mensaje, $contenido, $fecha, $autor, $imagen_url, $ID_reflexiones);
		}else{
			//sin imagen
			$stmt  = $conn->prepare('UPDATE reflexiones SET titulo = ?, mensaje = ?, contenido = ?, fecha = ?, autor = ? WHERE ID_reflexiones = ?');
			$stmt->bind_param("sssssi", $titulo, $mensaje, $contenido, $fecha, $autor, $ID_reflexiones);
		}

		$estado = $stmt->execute();
		$registros = $stmt->affected_rows;
		if ($estado > 0) {
			$respuesta = array(
				'respuesta' => 'exito',
				'id_actualizado' => $ID_reflexiones
			);
		}else{
			$respuesta = array(
				'respuesta' => 'error'
			);
		}
		$stmt->close();
		$conn->close();

			
		
	} catch (Exception $e) {
		$respuesta = array(
			'respuesta' => $e->getMessage()
		);
	}
	die(json_encode($respuesta));
}

if ($_POST['registro'] == 'eliminar'){
	$id_borrar = $_POST['id'];
	try {
		$stmt = $conn->prepare('DELETE FROM reflexiones WHERE ID_reflexiones = ? ');
		$stmt->bind_param('i', $id_borrar);
		$stmt->execute();
		if($stmt->affected_rows){
			$respuesta = array(
				'respuesta' => 'exito',  
				'id_eliminado' => $id_borrar
			);
		}else{
			$respuesta = array(
				'respuesta' => 'error'
			);
		}
	} catch (Exception $e) {
		$respuesta = array(
			'respuesta' => $e->getMessage()
		);
	}
	die(json_encode($respuesta));
}
