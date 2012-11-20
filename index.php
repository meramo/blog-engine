<?php

require 'blog.php';
use Blog\DB;

// Fetch all posts
$posts = DB\get('posts', $conn, 8);

view('index', array(
  'posts' => $posts,
  'name' => 'Igor'
));

// foreach($posts as $post) {
//   print_r($post);
// }


