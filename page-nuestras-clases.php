<?php get_header(); ?>

<main class="contenedor pagina seccion con-sidebar">
    <div class="text-center">
        <?php get_template_part('template-parts/paginas'); ?>


            <?php Gymstudio_lista_clases(); ?> 
        </div>

    </main>

<?php get_footer(); ?>