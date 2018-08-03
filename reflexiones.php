<?php 
    include_once 'template/header.php';
    include_once 'includes/bd_conexion.php';
?>
        <!-- TITULO NUESTRO EQUIPO -->
        <div class="titulo  uk-margin-medium-top">
            VIDA DEVOCIONAL 
        </div>

        <!-- VIDA DEVOCIONAL -->
        <div class="uk-container uk-container-expand uk-margin-medium">
            <div>
                <ul class="uk-subnav uk-subnav-pill" uk-switcher="connect: .switcher-container">
                    <li><a href="#">Reflexión - 19 Marzo</a></li>
                    <li><a href="#">Reflexión - 18 Marzo</a></li>
                    <li><a href="#">Reflexión - 17 Marzo</a></li>
                    <li><a href="#">Reflexión - 16 Marzo</a></li>
                    <li><a href="#">Reflexión - 15 Marzo</a></li>
                </ul>
                <ul class="uk-switcher switcher-container uk-margin">
                  <?php 
                    try {
                      $sql = "SELECT * FROM  reflexiones ";
                      $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }

                   while ($reflexion = $resultado->fetch_assoc() ) { ?>
                    <li>
                        <div class="uk-margin">
                            <img src="img/reflexiones/<?php echo $reflexion['imagen']; ?>" alt="Image">
                        </div>   
                        <div class="uk-margin-medium-top">
                            <article class="uk-article uk-text-justify">

                                <h1 class="uk-article-title"><a class="uk-link-reset" href=""><?php echo $reflexion['titulo']; ?>"</a></h1>

                                <p class="uk-article-meta">Escrito por <a href="#"><?php echo $reflexion['autor']; ?>"</a> el <?php echo $reflexion['fecha']; ?>". Posteado en <a href="#">Vida devocional Samaria</a></p>

                                <p class="uk-text-center uk-text-lead"><?php echo $reflexion['mensaje']; ?>"</p>

                                <p><?php echo nl2br($reflexion['contenido']); ?>"</p>

                                <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                    <div>
                                        <a class="uk-button uk-button-text" href="#">Leer más</a>
                                    </div>
                                    <div>
                                        <a class="uk-button uk-button-text" href="#">15 comentarios</a>
                                    </div>
                                </div>

                            </article>
                        </div>
                    </li>
                  <?php } ?>

                </ul>                
            </div>
        </div>

<?php include_once 'template/footer.php';?>