<article style="padding:3em;color:black;">
    <img style="width:30%;" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <p>Date : <?php the_date(); ?></p>
    <p>Auteur : <?php the_author(); ?></p>
</article>