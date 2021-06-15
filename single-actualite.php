<?php get_header(); ?>

<div class="actuTitre">
        <h2><?php the_title(); ?></h2>
        <h5>(<?php  echo get_the_excerpt(); ?>)</h5>
</div>
<div class="actuDate">
        le: <?php  echo get_the_date(); ?>
</div>
<div class="photoetcontenu">
        <?php the_post_thumbnail(); ?>
        <div class="theContent">
                <?php  the_content(); ?>
        </div>
</div>

<?php get_footer(); ?>