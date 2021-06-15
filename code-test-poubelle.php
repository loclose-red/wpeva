

<!-- récupération des posts -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
<?php endwhile; else : ?>
    <p>Aucun élément à afficher</p>
    <p>Front page</p>
<?php endif; ?>

<!-- affiche logo  'si le logo ne s'affiche pas, on affiche un lien'-->
<?php if(has_custom_logo()) : ?>
<?php the_custom_logo(); ?>
<?php else : ?>
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<?php endif; ?>

<header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-12 text-center">
                    <a class="blog-header-logo text-dark" href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a>
                </div>
            </div>
    </header>


<?php

    ///////////////////////////////////////////////////////////////////////
////////////        ajout de taxonomy pour 'magasin'
///////////////////////////////////////////////////////////////////////

add_action( 'init', 'wpm_add_taxonomies', 0 );

//On crée 1 taxonomie personnalisée: ville.

function wpm_add_taxonomies() {

	// Taxonomie Villes
	
	$labels_ville = array(
		'name'                       => _x( 'Villes', 'taxonomy general name'),
		'singular_name'              => _x( 'Ville', 'taxonomy singular name'),
		'search_items'               => __( 'Rechercher une Ville'),
		'popular_items'              => __( 'Villes populaires'),
		'all_items'                  => __( 'Toutes les Villes'),
		'edit_item'                  => __( 'Editer une Ville'),
		'update_item'                => __( 'Mettre à jour une Ville'),
		'add_new_item'               => __( 'Ajouter nouvelle Ville'),
		'new_item_name'              => __( 'Nom nouvelle Ville'),
		'separate_items_with_commas' => __( 'Séparer les Villes avec une virgule'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer un Ville'),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisées'),
		'not_found'                  => __( 'Pas de Villes trouvées'),
		'menu_name'                  => __( 'Villes'),
	);

	$args_ville = array(
		'hierarchical'          => false,
		'labels'                => $labels_ville,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'ville' ),
	);

	register_taxonomy( 'ville', $args_ville );

}


// Déclaration de la taxonomie "ville" associée au CPT magasin
register_taxonomy('ville', 'magasin', [
	'labels' => [
		'name'              => _x( 'ville', 'taxonomy general name' ),
		'singular_name'     => _x( 'ville', 'taxonomy singular name'),
		'search_items'      => __( 'Rechercher ville' ),
		'all_items'         => __( 'Tous les ville' ),
		'parent_item'       => __( 'ville Parent' ),
		'parent_item_colon' => __( 'ville Parent :' ),
		'edit_item'         => __( 'Modifier ville' ),
		'update_item'       => __( 'Mettre à jour ville' ),
		'add_new_item'      => __( 'Ajouter Nouveau ville' ),
		'new_item_name'     => __( 'Nom du nouveau ville' ),
		'menu_name'         => __( 'ville' ),
	],
	'hierarchical' => true,
	'rewrite' => ['slug' => 'ville']
]);
?>


<!-- bouton panier -->
<a class="btn btn-primary" href="<?php echo get_permalink(89); ?>">Voir pannier</a>

<!-- affichage contenu panier -->
<?php 
	global $woocommerce;;
	$items = $woocommerce->cart->get_cart();
	if ($items){
		//var_dump($items["98dce83da57b0395e163467c9dae521b"]["quantity"]);
		$nbArticles = $items["98dce83da57b0395e163467c9dae521b"]["quantity"];
		$prixTotal =  $items["98dce83da57b0395e163467c9dae521b"]["line_subtotal"];?>
		<div>
			<div>articles: <?php echo $nbArticles ; ?></div><br>
			<div>prix total: <?php echo $prixTotal ; ?></div>
		</div>

<?php	}; ?>


<!-- code test affichage bouton vente d'un produit -->

<?php $addProduit = 'add-to-cart=' . $loop->post->ID ; ?>
            <?php $urlHome = get_home_url(); ?>
            <?php $lienAchat = $urlHome . "/?" . $addProduit ; ?>
            <?php echo $lienAchat ; ?>
            <a href="<?php echo $lienAchat ; ?>"><?php echo $loop->post->ID ; ?></a>
            <?php //do_action('woocommerce_pagination'); ?>
