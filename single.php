<?php

require 'blog.php';
use Blog\DB;

// Fetch the specific post
$post = DB\get_by_id( (int)$_GET['id'], $conn );

// Check if a valid ID was returned from URL
if ( $post ) {
  $post = $post;

  view('single', array(
    'post' => $post
  ));

} else {
  header('location:index.php');
}
