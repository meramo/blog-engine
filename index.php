<?php

require 'functions.php';
use Blog\DB;

// Connect to db
$conn = DB\connect($config);

if ( !$conn ) die('Problem connecting to db');

// Fetch all posts
$posts = DB\get('posts', $conn, 8);

// foreach($posts as $post) {
//   print_r($post);
// }

// Filter through and display in the view
include 'index.view.php';
