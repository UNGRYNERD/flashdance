<?php

  include_once '../../../../wp-load.php';
    
  $elenco = array();
  $id=$_POST['id'];

  $nombre = get_the_title($id);
  $puesto=get_field('subtitulo',$id);
  $post = get_post($id); 
  $contenido = apply_filters('the_content', $post->post_content); 

  if($nombre){
    $elenco['name']=$nombre;
  } if($puesto) {
    $elenco['puesto']=$puesto;
  } if($contenido) {
    $elenco['text'] = $contenido; 
  }

  echo json_encode($elenco); 
?>