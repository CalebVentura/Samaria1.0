<?php 
	include_once 'funciones/funciones.php';
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha = date('Y-m-d H:i:s');
    $id_registro = $_POST['id_registro'];
    
if ($_POST['registro'] == 'eliminar'){

	$id_borrar = $_POST['id'];
	try {
		$stmt = $conn->prepare('DELETE FROM registrados WHERE ID_Registrado = ? ' );
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
