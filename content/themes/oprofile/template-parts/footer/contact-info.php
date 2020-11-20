    <address class="contact-info">
        <div class="contact-info__part">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Email</h4>
            <!-- On peut utiliser ce genre de chose pour éviter les spam : https://www.nicolas-hoffmann.net/utilitaires/crypteur.php -->

            <?php

                $email = get_theme_mod('oprofile_footer_email');
                $phone = get_theme_mod('oprofile_footer_phone');
                // https://www.php.net/manual/fr/function.nl2br.php
                $address = nl2br(get_theme_mod('oprofile_footer_address'));
            ?>

            <a href="mailto:<?php echo $email; ?>" class="contact-info__part__content is-email"><?php echo $email; ?></a>
        </div>
        <div class="contact-info__part">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Téléphone</h4>
            <a href="tel:<?php echo $phone; ?>" class="contact-info__part__content"><?php echo $phone; ?></a>
        </div>
        <div class="contact-info__part">
            <i class="fa fa-home" aria-hidden="true"></i>
            <h4 class="contact-info__part__label">Adresse</h4>
            <p class="contact-info__part__content">
                <?php echo $address; ?>
            </p>
        </div>

        <?php echo do_shortcode( '[tricot]' ); ?>

    </address>