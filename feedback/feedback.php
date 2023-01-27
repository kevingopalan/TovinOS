<?php
  $message = $_REQUEST['message'] ;
  mail( "kevin.gopalan@gmail.com", "TovinOS feedback",
    $message, "From: kevin.gopalan@gmail.com" );
  header('location: thanks.html')
?>
