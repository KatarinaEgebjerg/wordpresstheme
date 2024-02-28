<?php get_header(); ?>
<h1>Hello World!    </h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/3qF7wc1tQTU?si=nLniru8Vu47qNF1W" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div class="container">
    <!-- Main Loop -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>