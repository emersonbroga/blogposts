<?php

function newsletter_update( $id , $dados  )
{
  global $wpdb;
  
  $array = array();
  $array['nome'] = $dados['nome'];
  $array['email'] = $dados['email'];
  
  $format = array(); // possíveis formatos %s (string), %d (decimal) e %f (float). 
  $format['nome'] = '%s';
  $format['email'] = '%s';
  
  $where = array( 'ID' => $id );
  $where_format = array( 'ID' => '%d');
  
  $wpdb->update( 'newsletter', $array , $format, $where, $where_format );
  // tabela, dados, formato, onde, formato onde.

}