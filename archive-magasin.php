<?php get_header(); ?>


<div class="listeVilles">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="unMagasin">
        <a href="<?php the_permalink() ?>">
            <div class="blocTexte">
                <h5>
                    <?php  $lenom = wp_get_post_terms(get_the_ID(), 'ville') ;echo $lenom[0]->name ?>    
                </h5>
                <h6>
                    <?php the_title(); ?>
                </h6>
                <?//php the_content(); ?>
            </div>
            <div class="photoMagasin">
                <?php the_post_thumbnail(); ?>
            </div>
        </a>
    </div>
    <?php endwhile; else : ?>
        <p>Aucun élément à afficher</p>
        <?php endif; ?>
</div>


<?php get_footer(); ?>