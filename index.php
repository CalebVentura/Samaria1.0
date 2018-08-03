
<?php include_once 'template/header.php';?>
<?php include_once 'includes/bd_conexion.php' ?>

        <!-- CAROUSELl-->
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Full day Setiembre 2018</h5>
                <p>Con participación de jovenes y adolescentes que conforman cada célula de nuestra iglesia se realizó una integración entre ellas.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Full day Setiembre 2018</h5>
                <p>Con participación de jovenes y adolescentes que conforman cada célula de nuestra iglesia se realizó una integración entre ellas.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slide3.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Full day Setiembre 2018</h5>
                <p>Con participación de jovenes y adolescentes que conforman cada célula de nuestra iglesia se realizó una integración entre ellas.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slide4.jpg" alt="Fourth slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Full day Setiembre 2018</h5>
                <p>Con participación de jovenes y adolescentes que conforman cada célula de nuestra iglesia se realizó una integración entre ellas.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
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