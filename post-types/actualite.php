<?php

function create_actualite_cpt() {

	$labels = array(
		'name' => _x( 'actualites', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'actualite', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'actualites', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'actualite', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Archives actualite', 'textdomain' ),
		'attributes' => __( 'Attributs actualite', 'textdomain' ),
		'parent_item_colon' => __( 'Parents actualite:', 'textdomain' ),
		'all_items' => __( 'Tous actualites', 'textdomain' ),
		'add_new_item' => __( 'Ajouter nouvel actualite', 'textdomain' ),
		'add_new' => __( 'Ajouter', 'textdomain' ),
		'new_item' => __( 'Nouvel actualite', 'textdomain' ),
		'edit_item' => __( 'Modifier actualite', 'textdomain' ),
		'update_item' => __( 'Mettre à jour actualite', 'textdomain' ),
		'view_item' => __( 'Voir actualite', 'textdomain' ),
		'view_items' => __( 'Voir actualites', 'textdomain' ),
		'search_items' => __( 'Rechercher dans les actualite', 'textdomain' ),
		'not_found' => __( 'Aucun actualitetrouvé.', 'textdomain' ),
		'not_found_in_trash' => __( 'Aucun actualitetrouvé dans la corbeille.', 'textdomain' ),
		'featured_image' => __( 'Image mise en avant', 'textdomain' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'textdomain' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'textdomain' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'textdomain' ),
		'insert_into_item' => __( 'Insérer dans actualite', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet actualite', 'textdomain' ),
		'items_list' => __( 'Liste actualites', 'textdomain' ),
		'items_list_navigation' => __( 'Navigation de la liste actualites', 'textdomain' ),
		'filter_items_list' => __( 'Filtrer la liste actualites', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'actualite', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-pressthis',
		'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'actualite', $args );

}
add_action( 'init', 'create_actualite_cpt', 0 );