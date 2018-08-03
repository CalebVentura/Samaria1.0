  <?php // jamas volvere a olvidarte, querido espacio >:
    include_once 'funciones/sesiones.php';
    include_once 'funciones/funciones.php';  
    include_once 'templates/header.php';
    include_once 'templates/barra.php';
    include_once 'templates/navegacion.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        LISTA DE DEVOCIONALES
      </h1>
      <a href="admin-area.php">Ir a inicio</a>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ten cuidado al eliminar</h3><p>(si lo presionas se eliminará, no hay vuelta atras)</p>
              </div><!-- /.box-header --> 
                <div class="box-body">

                  <table id="registros" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Titulo</th>
                      <th>Fecha</th>
                      <th>Autor</th>
                      <th>Imagen</th>
                      <th>Mensaje</th>
                      <th>Contenido</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php 
                        try {
                          $sql = "SELECT * FROM  reflexiones";
                          $resultado = $conn->query($sql);
                        } catch (Exception $e) {
                          $error = $e->getMessage();
                          echo $error;
                        }

                       while ($devocional = $resultado->fetch_assoc() ) { ?>
                         <tr>
                           <td><?php echo $devocional['titulo']; ?></td>
                           <td><?php echo $devocional['fecha']; ?></td>
                           <td><?php echo $devocional['autor']; ?></td>
                           <td><img src="../img/reflexiones/<?php echo $devocional['imagen']; ?>" width="150px" alt=""></td>
                           <td><?php echo $devocional['mensaje']; ?></td>
                           <td><?php echo nl2br($devocional['contenido']); ?></td>
                           <td>
                              <a href="editar-devocional.php?id=<?php echo $devocional['ID_reflexiones'] ?>" class="btn bg-orange btn-flat margin">
                               <i class="fa fa-pencil"></i>
                              </a>
                              <a href="#" data-id="<?php echo $devocional['ID_reflexiones'] ?>" data-tipo="devocional" class="btn bg-maroon btn-flat margin borrar_registro">
                               <i class="fa fa-trash"></i>
                              </a>
                           </td>
                         </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Titulo</th>
                      <th>Fecha</th>
                      <th>Autor</th>
                      <th>Imagen</th>
                      <th>Mensaje</th>
                      <th>Contenido</th>
                    </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section>
  </div><!-- /.content-wrapper -->
  <?php include_once 'templates/footer.php'; ?> 