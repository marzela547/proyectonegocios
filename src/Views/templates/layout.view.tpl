<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{SITE_TITLE}}</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/{{BASE_DIR}}/public/css/styles.css" />
  {{foreach SiteLinks}}
    <link rel="stylesheet" href="/{{~BASE_DIR}}/{{this}}" />
  {{endfor SiteLinks}}
  {{foreach BeginScripts}}
    <script src="/{{~BASE_DIR}}/{{this}}"></script>
  {{endfor BeginScripts}}
</head>
<body>
  <header>
    <div id="color">
    </div>
    <nav id="inav" class="cnav">
        <ul>
            <li><a href="index.php?page=gnrl_inicio">Inicio</a></li>
            <li><a href="index.php?page=gnrl_conocenos">Conócenos</a></li>
            <li><a href="index.php?page=gnrl_contactanos">Contactanos</a></li>
            <li><a href="index.php?page=mnt_productos">Agregar Productos</a></li>
            <li id="Marcas">Catálogo
                <ul class="marcas">
                    <li id="m1">Pandora
                        <ul class="nieto">
                            <li><a href="catalogos.html" >Relojes</a></li>
                            <li ><a href="catalogos_copy.html" >Collares</a></li>
                            <li><a href="catalogos_copy2.html" >Pulseras</a></li>
                        </ul>
                    </li>
                    <li id="m2">Casio
                        <ul class="nieto">
                            <li ><a href="catalogos.html" >Relojes</a></li>
                            <li ><a href="catalogos_copy.html" >Collares</a></li>
                            <li><a href="catalogos_copy2.html" >Pulseras</a></li>
                        </ul>
                    </li>
                    <li id="m3">Be Good
                        <ul class="nieto">
                            <li><a href="catalogos.html" >Relojes</a></li>
                            <li ><a href="catalogos_copy.html" >Collares</a></li>
                            <li><a href="catalogos_copy2.html" >Pulseras</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="hmbbttn">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>
</header>
  <main>
  {{{page_content}}}
  </main>
  <footer >
    <section class="logo">
        <img src="/{{BASE_DIR}}/public/img/logofooterclaro.png" alt="pandora" style="width:auto;">
    </section>
    <section class="informacion">
        <section class="redes">
            <h2>Redes sociales</h2>
            <div>
                <a href="https://www.youtube.com/?gl=ES&hl=es">
                <img src="/{{BASE_DIR}}/public/img/facebook.png">
                <label>Facebook</label>
               </a>
            </div>
            <div>
               <a href="https://www.youtube.com/?gl=ES&hl=es">
                <img src="/{{BASE_DIR}}/public/img/twitter.png">
                <label>Twitter</label>
                </a>
            </div>
            <div >
                <a href="https://www.youtube.com/?gl=ES&hl=es">
                <img src="/{{BASE_DIR}}/public/img/instagram.png">
                <label> Instagram</label>
               </a>
            </div>
        </section>
        <section class="contactos">
            <h2>Información de Contacto</h2>
            <div >
                <img src="/{{BASE_DIR}}/public/img/hogar.png" alt="hogar">
                <label>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>

            </div>
            <div >
                <img src="/{{BASE_DIR}}/public/img/smartphone.png" alt="cel">
                <label>###########</label>
            </div>
            <div>
                <img src="/{{BASE_DIR}}/public/img/sobre.png" alt="correo">
                <label>##########</label>
            </div>
        </section>

    </section>


 <div class="container-footer">
     <div class="footer">
         <div class="copyright">
             <p>&copy; Todos los Derechos Reservados | *Nombre de la tienda</p>
         </div>
         <div class="information">
             <a href="">Información de la tienda</a>|<a href="">
                 privaci&oacute;n y política</a> | <a href="">
                     | Terminos y condiciones</a>
         </div>
     </div>
 </div>
</footer>
  {{foreach EndScripts}}
    <script src="/{{~BASE_DIR}}/{{this}}"></script>
  {{endfor EndScripts}}
</body>
</html>
