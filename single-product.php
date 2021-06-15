<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>    
    <?php 
    $product = wc_get_product(get_the_ID());
    ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
    <?php // echo $product->get_image() ; ?><br>
    <?php // echo $product->get_name() ; ?><br>
    <?php // echo $product->get_price_html() ; ?>
    <?php //the_post_thumbnail() ; ?>
<?php else : ?>
    <p>Aucun élément à afficher</p>
<?php endif; ?>


<?php get_footer(); ?>