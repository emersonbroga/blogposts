<?php

function newsletter_insert( $dados )
{
  global $wpdb;
  
  $array = array();
  $array['nome'] = $dados['nome'];
  $array['email'] = $dados['email'];
  
  $format = array(); // possíveis formatos %s (string), %d (decimal) e %f (float). 
  $format['nome'] = '%s';
  $format['email'] = '%s';
  
  $wpdb->insert( 'newsletter', $array , $format);
  // tabela, dados, formato.

}
