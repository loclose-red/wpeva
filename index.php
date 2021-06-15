<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
<?php endwhile; else : ?>
    <p>Aucun élément à afficher</p>
<?php endif; ?>

<?php  var_dump(carbon_get_theme_option( 'contactphone' )) ; ?>
<?php 
$slides = carbon_get_theme_option( 'crb_media_item' );
//var_dump($slides);
if ( $slides ) {
    foreach ( $slides as $slide ) {
        echo $slide['slide_message'];
    }
}
?>

<!-- pour l'affichage de slick slider -->
<div class="le_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
    <button type="button" class="slick-prev">Previous</button>

    <div><img src="http://localhost:81/ps_evaShop_glf/wp-content/uploads/2021/06/tshirt-3-1.jpg" alt=""></div>
    <div><img src="http://localhost:81/ps_evaShop_glf/wp-content/uploads/2021/06/tshirt-3-1.jpg" alt=""></div>
    <div><img src="http://localhost:81/ps_evaShop_glf/wp-content/uploads/2021/06/tshirt-3-1.jpg" alt=""></div>

    <button type="button" class="slick-next">Next</button>
</div>

index
<?php get_footer(); ?>