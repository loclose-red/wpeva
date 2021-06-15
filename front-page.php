<?php get_header(); ?>

<hr>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<hr>

<!-- affichage de la présentation -->
<div class="presentation">
    <h3><?php bloginfo('name'); ?></h3>
    <p><?php echo carbon_get_theme_option( 'descriptshop' ); ?></p>
    
    <a class="btn btn-primary" href="<?php echo get_permalink(15); ?>">A propos</a>
</div>


<!-- recupération et affichage des CPT actualité -->
<hr>
<h2>Nos dernières actualités</h2>
<section class="actualites">
    <?php $the_query = new WP_Query(['post_type' => 'actualite','posts_per_page'	=> 3]); ?>

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="uneActualite">
            <div class="image">
                <?php the_post_thumbnail(); ?>
            </div>            
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <div class="block-bouton">
                <a class="btn btn-info actu-btn" href="<?php the_permalink() ?>">Lire la suite</a>
            </div>
        </div>
            
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>Il n'y a pas d'actualité à afficher</p>
    <?php endif; ?>
</section>
<!-- fin et affichage des CPT actualité -->


<!-- recupération et affichage des CPT magasin -->
<hr>
<h2>Nos Magasins</h2>
<section class="actualites">
    <?php $the_query = new WP_Query(['post_type' => 'magasin']); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="uneActualite">
            <div class="image">
                <?php the_post_thumbnail(); ?>
            </div>            
            <h2><?php the_title(); ?></h2>
            <!-- affichage de la taxonomie -->
            <div class="taxonomie">
                <?php  $lenom = wp_get_post_terms(get_the_ID(), 'ville') ;echo $lenom[0]->name ?>
            </div>
            <div class="block-bouton">
                <a class="btn btn-info actu-btn" href="<?php the_permalink() ?>">Voir plus</a>
            </div>
        </div>           
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>Il n'y a pas de magasin à afficher</p>
    <?php endif; ?>
</section>
<!-- fin affichage des CPT magasin -->




<!-- recupération et affichage des meilleures ventes -->
<hr>
<h2>Nos meilleures ventes</h2>
<section class="actualites">
    <?php $the_query = new WP_Query([
        'post_type' => 'product',
        'meta_key' => 'total_sales', // trillage sur les meilleures ventes
        'orderby' => 'meta_value_num',
        'posts_per_page'	=> 3,
        ]); ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();$_product =  $post->ID ; ?>
        <div class="uneActualite">
            <div class="image">
                <?php the_post_thumbnail(); ?>
            </div>            
            <h2><?php the_title(); ?></h2>
            <div class="block-bouton">
                <!-- <a class="btn btn-info actu-btn" href="<?php the_permalink() ?>">voir</a> -->
                <?php
                    echo apply_filters(
                        'woocommerce_loop_add_to_cart_link',
                        sprintf(
                            '<a class="btn btn-info actu-btn" href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
                            esc_url( $product->add_to_cart_url() ),
                            esc_attr( $product->get_id() ),
                            esc_attr( $product->get_sku() ),
                            $product->is_purchasable() ? 'add_to_cart_button' : '',
                            esc_attr( $product->get_type() ),
                            esc_html( $product->add_to_cart_text() )
                        ),
                        $product
                    );?>
            </div>
        </div>           
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p>Il n'y a pas de produit à afficher</p>
    <?php endif; ?>
</section>
<!-- fin et affichage des meilleures ventes -->



<?php get_footer(); ?>