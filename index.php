
<?php include_once 'template/header.php';?>
<?php include_once 'includes/bd_conexion.php' ?>

<div class="position-relative overflow-hidden py-3 p-md-5 text-center bg-light portada">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Bienvenido</h1>
        <p class="lead font-weight-normal ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum modi repellendus dolor pariatur autem odit itaque veniam sit, aperiam harum!</p>
        <a class="btn btn-outline-secondary" href="#">Adelante</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
        
        <!-- TITULO SECCION 1 -->
        <div class="container container mt-3">
            <h2 class="text-center">¡ BIENVENIDOS !</h2>
            <p class="text-center">Iglesia Sámaria - Ondas de Amor celestial.</p>
          <!-- Content here -->
        </div>

        <!-- CARTAS DE PRESENTACIÓN -->
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

        <!-- TITULO -->
        <div class="titulo my-5">
            NUESTRO TRABAJOO
        </div>
    
        <div class="uk-child-width-1-4@s uk-child-width-1-6@m uk-child-width-1-3 uk-grid-collapse" uk-grid uk-lightbox="animation: fade">
            <?php 
                try {
                  $sql = "SELECT * FROM  galeria";
                  $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                  echo $error;
                }
               while ($imagen = $resultado->fetch_assoc() ) { ?>
                    <div>
                        <a class="uk-inline" href="img/galeria/<?php echo $imagen['url']; ?>" caption="Imparables 2018">
                            <img src="img/galeria/thumbs/<?php echo $imagen['url']; ?>" alt="">
                        </a>
                    </div>  
              <?php } ?>
        </div>
<?php include_once 'template/footer.php';?>