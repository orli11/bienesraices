<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta en frente del Bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen anuncio">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime ea provident numquam 
                totam illo porro nulla, quos earum sunt quibusdam id voluptate voluptatem dignissimos 
                unde officia laudantium tempore deserunt ipsa. Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Quisquam libero nesciunt itaque atque accusantium autem temporibus 
                rem expedita, provident delectus deserunt, rerum aut dolores! Earum ducimus pariatur 
                debitis est porro. Lorem, ipsum dolor sit.
            </p>
            

        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2026 &copy;</p>
    </footer>


    <script src="build/js/bundle.min.js"></script>
</body>
</html>
