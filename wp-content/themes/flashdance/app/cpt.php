<?php

/**
 * Register CPT
 */

//CPT ELENCO
add_action( 'init', 'post_type_elenco' );

function post_type_elenco() {
  $labels = array(
  'name' => _x( 'Elenco', 'post type general name' ),
  'singular_name' => _x( 'Elenco', 'post type singular name' ),
  'add_new' => _x( 'Añadir nuevo Elenco', 'proyectos' ),
  'add_new_item' => __( 'Añadir nuevo Elenco' ),
  'edit_item' => __( 'Editar Elenco' ),
  'new_item' => __( 'Nuevo Elenco' ),
  'view_item' => __( 'Ver Elenco' ),
  'search_items' => __( 'Buscar Elenco' ),
  'not_found' =>  __( 'No se han encontrado Elenco' ),
  'not_found_in_trash' => __( 'No se han encontrado Elenco en la papelera' )
  );

  $args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-groups',
    'supports' => array( 
      'title',
      'editor',
      'thumbnail'
    )
  );

  register_post_type( 'elenco', $args );
}

//CPT OPINIONES
add_action( 'init', 'post_type_opiniones' );

function post_type_opiniones() {
  $labels = array(
  'name' => _x( 'Opinion', 'post type general name' ),
  'singular_name' => _x( 'Opinion', 'post type singular name' ),
  'add_new' => _x( 'Añadir nueva Opinion', 'proyectos' ),
  'add_new_item' => __( 'Añadir nueva Opinion' ),
  'edit_item' => __( 'Editar Opinion' ),
  'new_item' => __( 'Nueva Opinion' ),
  'view_item' => __( 'Ver Opinion' ),
  'search_items' => __( 'Buscar Opinion' ),
  'not_found' =>  __( 'No se han encontrado Opinion' ),
  'not_found_in_trash' => __( 'No se han encontrado Opinion en la papelera' )
  );

  $args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-megaphone',
    'supports' => array( 
      'title',
      'editor'
    )
  );

  register_post_type( 'opiniones', $args );
}
