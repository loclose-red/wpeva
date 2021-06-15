<?php
add_action('init', function() {
	//déclaration du CPT pour gérer les Magasins
	register_post_type('magasin', [
		'labels' => [
			'name'                  => _x( 'Magasins', 'Post type general name', 'funnyshirt' ),
			'singular_name'         => _x( 'Magasin', 'Post type singular name', 'funnyshirt' ),
			'menu_name'             => _x( 'Magasins', 'Admin Menu text', 'funnyshirt' ),
			'name_admin_bar'        => _x( 'Magasin', 'Add New on Toolbar', 'funnyshirt' ),
			'add_new'               => __( 'Ajouter Nouveau', 'funnyshirt' ),
			'add_new_item'          => __( 'Ajouter Nouveau Magasin', 'funnyshirt' ),
			'new_item'              => __( 'Nouveau Magasin', 'funnyshirt' ),
			'edit_item'             => __( 'Modifier Magasin', 'funnyshirt' ),
			'view_item'             => __( 'Voir Magasin', 'funnyshirt' ),
			'all_items'             => __( 'Tous les Magasins', 'funnyshirt' ),
			'search_items'          => __( 'Recherché Magasins', 'funnyshirt' ),
			'parent_item_colon'     => __( 'Magasins Parent :', 'funnyshirt' ),
			'not_found'             => __( 'Magasins introuvable.', 'funnyshirt' ),
			'not_found_in_trash'    => __( 'Magasins introuvables dans la corbeille.', 'funnyshirt' ),
			'featured_image'        => _x( 'Magasin Photo', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'funnyshirt' ),
			'set_featured_image'    => _x( 'Définir la photo', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'funnyshirt' ),
			'remove_featured_image' => _x( 'Supprimer la photo', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'funnyshirt' ),
			'use_featured_image'    => _x( 'Utiliser comme image mise en avant', 'Overrides the "Use as featured image" phrase for this post type. Added in 4.3', 'funnyshirt' ),
			'archives'              => _x( 'Magasin archives', 'The post type archive label used in nav menus. Default "Post Archives". Added in 4.4', 'funnyshirt' ),
			'insert_into_item'      => _x( 'Insérer dans Magasin', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post). Added in 4.4', 'funnyshirt' ),
			'uploaded_to_this_item' => _x( 'Uploadé à cet Magasin', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post). Added in 4.4', 'funnyshirt' ),
			'filter_items_list'     => _x( 'Filtrer la liste des Magasins', 'Screen reader text for the filter links heading on the post type listing screen. Default "Filter posts list"/"Filter pages list". Added in 4.4', 'funnyshirt' ),
			'items_list_navigation' => _x( 'Magasins navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default "Posts list navigation"/"Pages list navigation". Added in 4.4', 'funnyshirt' ),
			'items_list'            => _x( 'Magasins liste', 'Screen reader text for the items list heading on the post type listing screen. Default "Posts list"/"Pages list". Added in 4.4', 'funnyshirt' ),
		],

		'public' => true,
		//'show_in_rest' => true,
		'menu_icon' => 'dashicons-products',
		'rewrite' => ['slug' => 'magasin'],
		'has_archive' => true,
		// 'supports' => ['title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'],
		'supports' => ['title', 'editor', 'thumbnail', 'comments', 'revisions'],
	]);

	// Déclaration de la taxonomie "ville" associée au CPT des Magasins
	register_taxonomy('ville', ['magasin'], [
		'labels' => [
			'name'              => _x( 'villes', 'taxonomy general name', 'funnyshirt' ),
			'singular_name'     => _x( 'ville', 'taxonomy singular name', 'funnyshirt' ),
			'search_items'      => __( 'Rechercher villes', 'funnyshirt' ),
			'all_items'         => __( 'Tous les villes', 'funnyshirt' ),
			'parent_item'       => __( 'ville Parent', 'funnyshirt' ),
			'parent_item_colon' => __( 'ville Parent :', 'funnyshirt' ),
			'edit_item'         => __( 'Modifier ville', 'funnyshirt' ),
			'update_item'       => __( 'Mettre à jour ville', 'funnyshirt' ),
			'add_new_item'      => __( 'Ajouter Nouveau ville', 'funnyshirt' ),
			'new_item_name'     => __( 'Nom du nouveau ville', 'funnyshirt' ),
			'menu_name'         => __( 'ville', 'funnyshirt' ),
		],
		'hierarchical' => true,
		'multiple' => true,
		'expanded'=> false,
		'rewrite' => ['slug' => 'ville']
	]);

	// Déclaration de la taxonomie "longitude latitude" associée au CPT des Magasins
	register_taxonomy('coordonnee', ['magasin'], [
		'labels' => [
			'name'              => _x( 'Latitude, Longitude', 'taxonomy general name', 'funnyshirt' ),
			'singular_name'     => _x( 'coordonnée', 'taxonomy singular name', 'funnyshirt' ),
			'search_items'      => __( 'Rechercher coordonnées', 'funnyshirt' ),
			'all_items'         => __( 'Tous les coordonnées', 'funnyshirt' ),
			'parent_item'       => __( 'coordonnée Parent', 'funnyshirt' ),
			'parent_item_colon' => __( 'coordonnée Parent :', 'funnyshirt' ),
			'edit_item'         => __( 'Modifier coordonnée', 'funnyshirt' ),
			'update_item'       => __( 'Mettre à jour coordonnée', 'funnyshirt' ),
			'add_new_item'      => __( 'Ajouter Nouveau coordonnée', 'funnyshirt' ),
			'new_item_name'     => __( 'Nom du nouveau coordonnée', 'funnyshirt' ),
			'menu_name'         => __( 'coordonnée', 'funnyshirt' ),
		],
		'hierarchical' => false,
		'multiple' => true,
		'expanded'=> false,
		'rewrite' => ['slug' => 'coordonnee']
	]);
});