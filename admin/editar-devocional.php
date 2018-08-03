<?php
    include_once 'funciones/sesiones.php';
    include_once 'templates/header.php';
    include_once 'funciones/funciones.php';
    $id = $_GET['id'];
    if (!filter_var($id, FILTER_VALIDATE_INT)) {
        die("Error...!");
    }
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>EDITAR DEVOCIONALES</h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>
      <div class="row">
        <div class="col-md-8">
          <!-- Main content -->
          <section class="content">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                    <h3 class="box-title">Editar Devocional</h3>
              </div>
              <div class="box-body">
                <?php 
                  $sql = "SELECT * FROM `reflexiones` WHERE `ID_reflexiones` = $id ";// ==
                  $resultado = $conn->query($sql);
                  $devocional = $resultado->fetch_assoc();

                 ?>
                  <!-- form start -->
                  <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-devocional.php" enctype="multipart/form-data">
                    <div class="box-body">

                      <div class="form-group">
                        <label for="titulo">Titulo: </label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="<?php echo $devocional['titulo']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="autor">Autor: </label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="<?php echo $devocional['autor']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="imagen_actual">Imagen Actual</label>
                        <br>
                        <img src="../img/reflexiones/<?php echo $devocional['imagen']; ?>" width="200px" alt="">
                      </div>
                      <div class="form-group">
                        <label for="imagen_reflexion">Imagen</label>
                        <input class="form-control" type="file" id="imagen_reflexion" name="archivo_imagen">
                        <p class="help-block">Selecciona la imagen que irá en la portada</p>
                      </div>

                      <div class="form-group">
                        <label for="mensaje">Mensaje: </label>
                        <input type="text" class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" value="<?php echo $devocional['mensaje']; ?>">
                      </div>

                      <div class="form-group">
                        <label for="contenido">Contenido: </label>
                        <textarea class="form-control" name="contenido" id="contenido"  placeholder="Contenido" rows="20"><?php echo $devocional['contenido']; ?></textarea>
                      </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                          <input type="hidden" name="devocional" value="actualizar">
                          <input type="hidden" name="ID_reflexiones" value="<?php echo $id; ?>">
                          <button type="submit" class="btn btn-primary"">Guardar cambios</button>
                    </div>
                  </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->        
        </div>
      </div>
  </div><!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?> 


