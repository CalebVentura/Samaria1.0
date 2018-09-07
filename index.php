
<?php include_once 'template/header.php';?>
<?php include_once 'includes/bd_conexion.php' ?>

        <div class="position-relative overflow-hidden py-3 p-md-5 text-center bg-light portada">
              <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal">Iglesia Samaria</h1>
                <p class="lead font-weight-normal ">25 años trabajando arduamente en la comunidad de Huaycán</p>
                <!--<a class="btn btn-outline-secondary" href="#">video</a>-->
              </div>
              <div class="product-device shadow-sm d-none d-md-block"></div>
              <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        
        <!-- NUBIENVENIDA -->

        <div class="container container mt-3">
            <h2 class="text-center">¡ BIENVENIDOS !</h2>
          <!-- Content here -->
        </div>


        <!-- CARTAS DE PRESENTACIÓN -->
        <div class="titulo my-5">
            NUESTRO TRABAJO
        </div>
        <div class="py-4 bg-light">
            <div class="container px-1">
              <div class="row mx-0">

                <?php 
                    try {
                      $sql = "SELECT * FROM  cards";
                      $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }
                   while ($card = $resultado->fetch_assoc() ) { ?>
                        <div class="col-6 col-md-3 px-1">
                          <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="img/<?php echo $card['imagen'];?>" >
                            <div class="card-body p-2">
                                <h4 class="card-title text-center"><?php echo $card['titulo']; ?></h4>
                              <p class="card-text mt-2"><?php echo $card['descripcion']; ?></p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">ver más</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>    
                  <?php } ?>
              </div>
            </div>
        </div>

        <!-- CONOCENOS -->
        <div class="titulo my-5">
            CONOCENOOS
        </div>
        <div class="uk-child-width-1-4@s uk-child-width-1-6@m  uk-child-width-1-3 uk-grid-collapse" uk-grid uk-lightbox="animation: fade">
            <?php 
                try {
                  $sql = "SELECT * FROM  galeria";
                  $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                  echo $error;
                }
               while ($imagen = $resultado->fetch_assoc() ) { ?>
                    <div class="galeriaa">
                        <a class="uk-inline galeria" href="img/galeria/<?php echo $imagen['url']; ?>" caption="Imparables 2018">
                            <img class="galeria" src="img/galeria/thumbs/<?php echo $imagen['url']; ?>" alt="">
                        </a>
                    </div>  
              <?php } ?>
        </div>

        <!-- UBICACIÓN -->
        <div class="titulo my-5">
            UBÍCANOS
        </div>
            <p class="uk-text-center">UCV 172-C Lote 4 Zona M - Huaycan </p>
            <p class="uk-text-center"> Paradero "La Curva"</p>
        <div id="mapa" class="mapa">
        </div>

<?php include_once 'template/footer.php';?>