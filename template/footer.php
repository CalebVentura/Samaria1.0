 
        <!-- FOOTER -->
        <footer class="px-5">
            <div class="row">

                <!--SOBRE NOSOTROS-->
                <div class="col-12 col-sm-4 pt-5 px-1 text-center">
                    <h3 class="text-light">SOBRE NOSOTROS</h3>
                    <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam provident eligendi id, in labore ipsa odit, amet veniam facere, commodi explicabo reiciendis sit!</p>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">ver más</button>
                    </div>
                </div><!--SOBRE NOSOTROS-->

                <!-- REFLEXIONES -->
                <div class="col-12 col-sm-4  pt-5 px-1 text-center">
                    <h3 class="text-light">ULTIMAS NOTICIAS</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-light" href="#">Resource</a></li>
                        <li><a class="text-light" href="#">Resource name</a></li>
                        <li><a class="text-light" href="#">Another resource</a></li>
                        <li><a class="text-light" href="#">Final resource</a></li>
                    </ul>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">ver más</button>
                    </div>
                </div><!-- REFLEXIONES -->
                
                <!-- CONTACTOS -->    
                <div class="col-12 col-sm-4  pt-5 px-1 text-center">
                    <h3 class="text-light">CONTACTOS</h3>
                    <form action="guardar_registro.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre y Apellido</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre Apellido1 Apellido2" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Escriba su mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="4" name="mensaje"></textarea>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" id="btn-submit" type="submit" name="submit">Enviar mensaje</button>
                    </form>
                </div><!-- CONTACTOS -->

                <!-- SAMARIA LOGO -->
                <div class="col-12 my-5 text-center">
                    <img class="mb-2" src="img/logo-barra.png" alt="">
                    <small class="d-block mb-3 text-light">IGLESIA SAMARIA</small>
                    <small class="d-block mb-3 text-light">Ondas de Amor celestial</small>
                    <small class="d-block mb-3 text-light">2018</small>
                </div><!-- SAMARIA LOGO -->

                <!-- COPYRIGHT-->
                <div class="col-12 my- text-center">
                    <small class="d-block mb-3 text-light">Derechos reservados © ALITEV PERU - 2018</small>
                </div><!-- COPYRIGHT -->
            </div>
        </footer>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>

        <script src="js/uikit.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
