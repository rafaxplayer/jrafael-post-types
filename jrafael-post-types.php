<?php
/*
Plugin Name: jrafael-posts-types
Plugin URI: 
Description: .post types para la web de j Rafael
Version: 1.0
Author: j Rafael simarro
Author URI: http://juanrafaelsimarro.com
License: GPL2
*/


// Register Custom Post Type
function custom_post_types() {

	$labels = array(
        'name' => _x( 'Proyectos', 'post type general name' ),
        'singular_name' => _x( 'Proyecto', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo', 'book' ),
        'add_new_item' => __( 'Añadir nuevo Proyecto' ),
        'edit_item' => __( 'Editar Proyecto' ),
        'new_item' => __( 'Nuevo Proyecto' ),
        'view_item' => __( 'Ver Proyecto' ),
        'search_items' => __( 'Buscar Proyectos' ),
        'not_found' =>  __( 'No se han encontrado Proyectos' ),
        'not_found_in_trash' => __( 'No se han encontrado Proyectos en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'thumbnail')
        
    );
	register_post_type( 'proyecto', $args );

}
add_action( 'init', 'custom_post_types', 0 );