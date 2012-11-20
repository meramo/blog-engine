<?php

require 'functions.php';
require 'db.php';


// Connect to db
$conn = Blog\DB\connect($config);

if ( !$conn ) die('Problem connecting to db');
