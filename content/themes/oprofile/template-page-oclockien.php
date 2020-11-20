<?php

/*

Template Name: Page reservée aux oClockiens

*/

?>

<?php get_header(); ?>

<?php

$user = wp_get_current_user();
// echo '<pre style="color:black;">';
// var_dump($user);
// echo '<pre>';


if (in_array('oclockien', $user->roles)) :

?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <div style="padding:3em;color:black;">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>

    <?php endwhile; endif; ?>
    
<?php else : ?>

<p style="color:red">Tu n'est pas oClockien, tu n'as pas le droit d'accéder à cette page !!!</p>

<?php endif; ?>

<?php get_footer(); ?>