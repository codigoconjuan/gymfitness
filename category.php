<?php get_header(); ?>
    <main class="pagina seccion no-sidebars contenedor">

    <?php 
        $categoria = get_queried_object(); 
    ?>
        <h2 class="text-center texto-primario">Categoria: <?php echo $categoria->name; ?></h2>

        <ul class="listado-blog">
            <?php while(have_posts()): the_post(); ?>
                <?php get_template_part('template-parts/loop', 'blog'); ?>
            <?php endwhile; ?>
        </ul>
    </main>
<?php get_footer(); ?>