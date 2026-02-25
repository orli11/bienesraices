<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen-nosotros">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 años de experiencia...</blockquote>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime ea provident numquam 
                    totam illo porro nulla, quos earum sunt quibusdam id voluptate voluptatem dignissimos 
                    unde officia laudantium tempore deserunt ipsa. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Quisquam libero nesciunt itaque atque accusantium autem temporibus 
                    rem expedita, provident delectus deserunt, rerum aut dolores! Earum ducimus pariatur 
                    debitis est porro. Lorem, ipsum dolor sit.
                </p>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime ea provident numquam 
                    totam illo porro nulla, quos earum sunt quibusdam id voluptate voluptatem dignissimos 
                    unde officia laudantium tempore deserunt ipsa. 
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                    <h3>Seguridad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
                </div>
                <div class="icono">
                    <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                    <h3>Tiempo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.</p>
                </div> 
            </div>
    </section>

    <?php 
        incluirTemplate('footer'); 
    ?>