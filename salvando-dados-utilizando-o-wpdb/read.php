<?php

function newsletter_fetch_rows( )
{
  global $wpdb; 
  
  $query = 'SELECT * FROM newsletter';
  
  return $wpdb->get_results($query, "ARRAY_A");
  // Os possíveis tipos de retorno do get results são "ARRAY_A", "ARRAY_N", "OBJECT", "OBJECT_K" 
}