</div> <!-- fermeture de la div container ouverte dans le fichier « header.php »-->

<div class="sectionFooter">
    
    <div class="container footerContenu">

    <!-- affiche logo  -->
    <div class="bloc-logo">
        <div class="logo">
            <?php the_custom_logo(); ?>
        </div>
        <div class="logo-text">
            <h3><?php bloginfo('name'); ?></h3>
            <h4><?php bloginfo('description'); ?></h4>
        </div>
        
    </div>
    <!-- Fin affiche logo -->
    
    <div class="footerNav">
        <h4>Navigation</h4>
        
        <h5><a class="" href="<?php echo get_permalink(19); ?>">Contact</a></h5>
        <h5><a class="" href="<?php echo get_permalink(15); ?>">A propos</a></h5>
        <h5><a class="" href="<?php echo get_permalink(112); ?>">Conditions générales de vente</a></h5>
        
    </div>
    <div class="footerContact">
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
    
</div>
    
</div>

<!-- pour le slider -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<!-- <script type="text/javascript" src=https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js></script> -->
<!-- <script type="text/javascript" src="slick/slick.min.js"></script> -->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('.le_slider').slick({setting-name: setting-value});
        autoplay: true,
		slidesToShow: 2,
    });
</script>     -->
    
<?php wp_footer(); ?>
</body>
</html>