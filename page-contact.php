<?php get_header(); ?>

        <div class="infoContact">
            <h4>Nous contacter</h4>
            <h5>Adresse: <?php echo carbon_get_theme_option( 'contactadresse' ); ?></h5>
            <h5> Téléphone: 
                <a href="tel: <?php echo carbon_get_theme_option( 'contactphone' ); ?>">
                    <?php echo carbon_get_theme_option( 'contactphone' ); ?>
                </a>
            </h5>
            <h5> Email: 
                <a href="mailto: <?php echo carbon_get_theme_option( 'contactmail' ); ?>?subject=contact from shop">
                    <?php echo carbon_get_theme_option( 'contactmail' ); ?>
                </a>
            </h5>
        </div>
        <div class="formulaire">
            <h5>Envoyer nous un message</h5>
            <?php echo do_shortcode( '[contact-form-7 id="104" title="Formulaire de contact 1"]' ); ?>
        </div>
        <a class="btn btn-info" href="<?php echo get_post_type_archive_link( 'magasin' ); ?>">nos magasins</a>

        <!-- affichage de la carte google en plug-in -->
        <div class="carteGoogle">
            <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>            
        </div>                
<br>
<br>

<!-- affichage d'un autre plug in carte -->
<?php //echo do_shortcode( '[osm_map_v3 map_center="43.7586,6.9242" zoom="11.0" width="95%" height="450" post_markers="1" ]' ); ?>

<?php get_footer(); ?>