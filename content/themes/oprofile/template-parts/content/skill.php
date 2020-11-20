        <div class="grid__item">
          <i class="grid__item__icon fa <?php the_field('icone'); ?> aria-hidden="true"></i>
          <h3 class="grid__item__title"><?php the_title(); ?></h3>
          <p class="grid__item__content"><?php the_content(); ?></p>
          <p class="grid__item__content">Niveau de compétence : <?php the_field('niveau'); ?></p>
          <pre>
          <?php
          // https://developer.wordpress.org/reference/functions/the_meta/
          // the_meta();
          // var_dump(get_post_custom());
          // var_dump(get_post_custom_values('icone')[0]);
          // the_field('icone');
          ?>
          </pre>
        </div>