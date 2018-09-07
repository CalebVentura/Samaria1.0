 
        <!-- FOOTER -->
        <footer class="">
            <div class="row">

                <!--SOBRE NOSOTROS-->
                <div class="col-12 col-sm-4 pt-5 px-1 text-center">
                    <h3 class="text-light">SOBRE NOSOTROS</h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Figlesiasamariaadp%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div><!--SOBRE NOSOTROS-->

                <!-- REFLEXIONES -->
                <div class="col-12 col-sm-4  pt-5 px-1 text-center">
                    <h3 class="text-light">NAVEGA</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-light" href="#">Inicio</a></li>
                        <li><a class="text-light" href="#">Galeria</a></li>
                        <li><a class="text-light" href="#">Reflexiones</a></li>
                        <li><a class="text-light" href="#">Reuniones</a></li>
                        <li><a class="text-light" href="#">Nosotros</a></li>
                    </ul>
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
                            <textarea class="form-control" id="mensaje" rows="4" name="mensaje" placeholder="Escribenos, gustosamente te responderemos"></textarea>
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
                    <small class="d-block mb-3 text-light">Derechos reservados © ALITEV PERU - <a href="admin/admin-area.php" style="color: #fff">2018</a></small>
                </div><!-- COPYRIGHT -->
            </div>
        </footer>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>


        <script src="js/uikit.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!--LEAFLETJS - MAPAS -->
        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

        <script src="js/main.js"></script>
        

        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
