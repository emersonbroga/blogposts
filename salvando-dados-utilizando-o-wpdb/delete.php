<?php

function newsletter_delete( $id )
{
  global $wpdb; 
  
  $wpdb->query("DELETE FROM 'newsletter' WHERE ID = $id");

}