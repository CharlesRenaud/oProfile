<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php get_template_part('template-parts/content/banner') ?>

<?php endwhile; endif; ?>


<?php

// On vérifie que le réglage (qui nous vient du customizer) soit défini
// https://developer.wordpress.org/reference/functions/get_theme_mod/
if (get_theme_mod('oprofile_posts_count')) {
    $nb_posts_to_show = get_theme_mod('oprofile_posts_count');
}
else {
    $nb_posts_to_show = 0;
}

?>

<?php if ($nb_posts_to_show != 0) :?>

    <section class="posts" id="posts">

    <?php

    // echo '<span style="font-size:2em;color:red;">' . $nb_posts_to_show . '</span>';

    $category = get_theme_mod('oprofile_home_category_display');

    // echo '<span style="font-size:2em;color:red;">' . $category . '</span>';

    $args = [
        // 'post_type' => 'post',
        'posts_per_page' => $nb_posts_to_show,
        'orderby' => 'rand',
        // 'category__not_in' => 3,
        'category_name' => $category
    ];

    $wpqueryArticles = new WP_Query($args);

    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

        <?php get_template_part('template-parts/content/post-excerpt'); ?>

    <?php endwhile; endif; ?>

    </section>

<?php endif; ?>

<?php if (get_theme_mod('oprofile_home_insert')): ?>

    <?php // echo '<span style="padding:3em;color:red;">' . get_theme_mod('oprofile_home_insert') . "<span>";?>

        <?php

        $args = [
            'page_id' => get_theme_mod('oprofile_home_insert')
        ];

        $wpqueryPageInsert = new WP_Query($args);

        ?>

        <?php if ($wpqueryPageInsert->have_posts()): while ($wpqueryPageInsert->have_posts()): $wpqueryPageInsert->the_post(); ?>

            <?php get_template_part('template-parts/content/page-insert'); ?>

        <?php endwhile; endif; ?>

<?php endif; ?>

<section class="grid" id="grid">

<?php

$args = [
    'post_type' => 'post',
    'category_name' => 'competences'
];

$wpqueryArticles = new WP_Query($args);

?>

<?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

    <?php get_template_part('template-parts/content/skill'); ?>

<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>