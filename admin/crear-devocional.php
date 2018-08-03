<?php
    include_once 'funciones/sesiones.php';
    include_once 'templates/header.php';
    include_once 'funciones/funciones.php';
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>CREAR DEVOCIONALES</h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>
      <div class="row">
        <div class="col-md-8">
          <!-- Main content -->
          <section class="content">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                    <h3 class="box-title">Crear Devocional</h3>
              </div>
              <div class="box-body">
                  <!-- form start -->
                  <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-devocional.php" enctype="multipart/form-data"><!--enctype="multipart/form-data" para subir archivos-->
                    <div class="box-body">

                      <div class="form-group">
                        <label for="titulo">Titulo: </label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
                      </div>

                      <div class="form-group">
                        <label for="autor">Autor: </label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
                      </div>

                      <!--
                      <div class="form-group">
                        <label for="imagen">Nombre Imagen: </label>
                        <input type="text" class="form-control" id="imagen" name="imagen" placeholder="nombre de imagen">
                      </div>
                      -->

                      <div class="form-group">
                        <label for="imagen_reflexion">Imagen</label>
                        <input class="form-control" type="file" id="imagen_reflexion" name="archivo_imagen">
                        <p class="help-block">Selecciona la imagen que irá en la portada</p>
                      </div>

                      <div class="form-group">
                        <label for="mensaje">Mensaje: </label>
                        <input type="text" class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje">
                      </div>

                      <div class="form-group">
                        <label for="contenido">Contenido: </label>
                        <textarea class="form-control" name="contenido" id="contenido"  placeholder="Escriba aqui la reflexiòn de hoy" rows="20"></textarea>
                      </div>
                    </div><!-- box-body -->

                    <div class="box-footer">
                          <input type="hidden" name="registro" value="nuevo">
                          <button type="submit" class="btn btn-primary" id="btnRegistro">Guardar</button>
                    </div>
                  </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->        
        </div>
      </div>
  </div><!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?> 


