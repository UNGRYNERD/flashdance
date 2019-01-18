<?php

/**
 * Register CPT
 */

//CPT ELENCO
add_action( 'init', 'post_type_projects' );

function post_type_projects() {
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
