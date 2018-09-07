<?php include_once 'template/header.php';?>
<?php include_once 'includes/bd_conexion.php';?>

        <!-- TITULO -->
        <div class="titulo uk-margin-medium-top">
            GALERIA
        </div>

        <div class="uk-container uk-container-expand">
            <div>
                <div class="uk-text-center uk-margin-large-top">
                    <h2 class="uk-text-large">LOREM IPSUM DOLOR SIT AMET</h2>
                    <p class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, deleniti!</p><br>
                </div>

                <ul class="uk-subnav uk-subnav-pill" uk-switcher="connect: .switcher-container">
                    <li><a href="#">Imparables 2018</a></li>
                    <li><a href="#">Full Day</a></li>
                    <li><a href="#">Huaraz 2016</a></li>
                    <li><a href="#">25 Aniversario</a></li>
                    <li><a href="#">EBDV-2018</a></li>
                </ul>


                <ul class="uk-switcher switcher-container uk-margin">
                    <li>Realizado del 6 al 21 de Febrero.</li>
                    <li>Un momento de relajo y diversión realizado el 21 de setiembre del 2017.</li>
                    <li>Los Lideres jovenes de celulas tuvieron la oportunidad de ir a Huaraz y hacer lo que mejor saben.</li>
                    <li>Ya son 25 los años que Samaria está en Huaycan. Revive junto a nosotros su historia y la evolución que ha tenido hasta el día de hoy.</li>
                    <li>Escuela Bíblica de verano del 2018.</li>
                </ul>

                <h4>GALERIÍA</h4>
                <ul class="uk-switcher switcher-container uk-margin">

                    <!--Imparables 2018-->
                    <li>
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
                                        <a class="uk-inline galeria" href="img/imparables2018/<?php echo $imagen['url']; ?>" caption="Imparables 2018">
                                            <img class="galeria" src="img/imparables2018/thumbs/<?php echo $imagen['url']; ?>" alt="">
                                        </a>
                                    </div>  
                              <?php } ?>
                        </div>
                    </li>

                    <!--Full Day-->
                    <li>
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
                                        <a class="uk-inline galeria" href="img/fullday/<?php echo $imagen['url']; ?>" caption="FULL DAY">
                                            <img class="galeria" src="img/fullday/thumbs/<?php echo $imagen['url']; ?>" alt="">
                                        </a>
                                    </div>  
                              <?php } ?>
                        </div>
                    </li>

                    <!--EBDV 2018-->
                    <li>
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
                                        <a class="uk-inline galeria" href="img/ebdv2018/<?php echo $imagen['url']; ?>" caption="EBDV 2018">
                                            <img  class="galeria" src="img/ebdv2018/thumbs/<?php echo $imagen['url']; ?>" alt="">
                                        </a>
                                    </div>  
                              <?php } ?>
                        </div>
                    </li>

                    <!--25 Aniversario-->
                    <li>
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
                                        <a class="uk-inline galeria" href="img/25aniversario/<?php echo $imagen['url']; ?>" caption="25 ANIVERSARIO - IGLESIA SAMARIA">
                                            <img class="galeria"  src="img/25aniversario/thumbs/<?php echo $imagen['url']; ?>" alt="">
                                        </a>
                                    </div>  
                              <?php } ?>
                        </div>
                    </li>

                    <!--Huaraz 2016 -->
                    <li>
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
                                        <a class="uk-inline galeria" href="img/huaraz2016/<?php echo $imagen['url']; ?>" caption=" VIAJE MISIONERO - HUARAZ 2016">
                                            <img class="galeria"  src="img/huaraz2016/thumbs/<?php echo $imagen['url']; ?>" alt="">
                                        </a>
                                    </div>  
                              <?php } ?>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

<?php include_once 'template/footer.php';?>
