<?php get_header(); ?>

<div class="pageMagasin">

    
    <h2><?php the_title(); ?></h2>
    <!-- affichage de la taxonomie -->
    <h4>
        <?php  $lenom = wp_get_post_terms(get_the_ID(), 'ville') ;echo $lenom[0]->name ?>
    </h4>
    <br>
    <div class="coordonnee">
        <h6>latitude: <?php  $coord = wp_get_post_terms(get_the_ID(), 'coordonnee') ;echo $coord[0]->name ?></h6>
        <h6>longitude: <?php  $coord = wp_get_post_terms(get_the_ID(), 'coordonnee') ;echo $coord[1]->name ?></h6>            
    </div>
    <br>
    <div class="magasinPhotoEtContenu">
        <?php the_post_thumbnail(); ?>
        <div class="magasinContenu">
                <?php  the_content(); ?>
        </div>
    </div>

</div>


<?php get_footer(); ?>



