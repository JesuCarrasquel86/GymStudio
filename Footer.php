
<footer class="Site-footer contenedor">
    <hr>

    <div class="contenido-footer">
    <?php 
                $args = array (
                    'theme-location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
           
             ?>

             <p class="copyright"> Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . "By Jesús Carrasquel" . " " . date('Y'); ?> </p>
    </div>

</footer>

<?php wp_footer(); ?>
    </body>
</html>