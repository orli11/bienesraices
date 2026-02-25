<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen anuncio">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/02/2026</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
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
                unde officia laudantium tempore deserunt ipsa. Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Quisquam libero nesciunt itaque atque accusantium autem temporibus 
                rem expedita, provident delectus deserunt, rerum aut dolores! Earum ducimus pariatur 
                debitis est porro. Lorem, ipsum dolor sit.
            </p>
        </div>
    </main>

    <?php 
        incluirTemplate('footer'); 
    ?>
    
