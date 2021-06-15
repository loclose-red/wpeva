<?php get_header(); ?>

<h3>Tous nos produits</h3>
<div class="woocommerce columns-3">
    <ul class="products">
        <?php
        $args = array('post_type' => 'product', 'posts_per_page' => 3, 'columns' => '3',     'meta_value' => 'yes');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
        ?>
            <li class="product">
                <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                    <?php woocommerce_show_product_sale_flash($post, $product); ?>
                    <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                        else echo '<img src="" alt="Placeholder" width="300px" height="300px" />'; ?>
                    <h3><?php the_title(); ?></h3>
                    <?php echo do_shortcode('[add_to_cart id="' . $loop->post->ID . '"]'); ?>
                    
                </a>
            </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </ul>
</div>

<?php get_footer(); ?>