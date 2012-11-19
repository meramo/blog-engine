<?php

require 'functions.php';
use Blog\DB;

// Connect to db
$conn = DB\connect($config);

if ( !$conn ) die('Problem connecting to db');

// Fetch the specific post
// TODO $post = DB\get_by_id($_GET['id']);
$post = DB\query("SELECT * FROM posts WHERE id = :id LIMIT 1",
                  array('id' => $_GET['id']),
                  $conn);

// Check if a valid ID was returned from URL
if ( $post ) {
  $post = $post;

  // Filter through and display in the view
  $view_path = 'views/single.view.php';
  include 'views/layout.php';

} else {
  header('location:index.php');
}
