<?php

// Custom postype


require_once __DIR__ . '/../post-types/actualite.php';
require_once __DIR__ . '/../post-types/magasin.php';

//pour réactiver les permaliens en automatique quand on crée des nouveau post type
/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'flush_rewrite_rules' );