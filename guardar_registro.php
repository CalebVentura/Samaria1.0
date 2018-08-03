<?php /*
 if(!isset($_POST['submit'])) {
   exit("hubo un error");
 } */?>
<?php if (isset($_POST['submit'])) :
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $fecha = date('Y-m-d H:i:s');
        try {
            require_once('includes/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, mensaje_registrado, fecha_registro) VALUES (?,?,?)");
            $stmt->bind_param("sss", $nombre, $mensaje, $fecha);
            $stmt->execute();
            $ID_registro = $stmt->insert_id; 
            $stmt->close();
            $conn->close();
            header('Location: guardar_registro.php?exitoso=1'); //prevenir reinsercion de datos
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
   endif; ?>
<?php include_once 'template/header.php'; ?>
  <section class="container my-5">
    <h2 class="text-center">MENSAJE ENVIADO CORRECTAMENTE </h2>
    <?php if (isset($_GET['exitoso'])):
      if ($_GET['exitoso']=="1") {
        echo "Registro Exitoso";
      }
    endif; ?>
  </section>
<?php include_once 'template/footer.php'; ?>