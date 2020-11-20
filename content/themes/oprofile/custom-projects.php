<?php

/*
Template Name: Liste des projets
*/

?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content/banner-projects') ?>

    <?php endwhile; endif; ?>

    <section class="posts" id="posts">

    <?php

    $args = [
        'post_type' => 'project'
    ];

    $wpqueryProjects = new WP_Query($args);

    ?>

    <?php if ($wpqueryProjects->have_posts()): while ($wpqueryProjects->have_posts()): $wpqueryProjects->the_post(); ?>

        <?php get_template_part('template-parts/content/project-excerpt'); ?>

    <?php endwhile; endif; ?>

    </section>

<?php get_footer(); ?>