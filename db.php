<?php namespace Blog\DB;

$config = array(
  'username' => 'root',
  'password' => 'root',
  'database' => 'blog'
);

// Connecting to db
function connect($config)
{
  try {
    $conn = new \PDO('mysql:host=localhost;dbname=' .
                    $config['database'],
                    $config['username'],
                    $config['password']);
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch(Exception $e) {
    return false;
  }
}

// Constructing queries
function query($query, $bindings, $conn)
{
  $stmt = $conn->prepare($query);
  $stmt->execute($bindings);
  return ($stmt->rowCount() > 0) ? $stmt : false;

}

// Getting information from db
function get($tableName, $conn, $limit = 10)
{
  try {
      $result = $conn->query("SELECT * from $tableName ORDER BY id DESC LIMIT $limit");
      return ( $result->rowCount() > 0 )
        ? $result
        : false;
    } catch(Exception $e) {
      return false;
    }
}

// Getting a single post
function get_by_id($id, $conn)
{
  $query = query(
    "SELECT * FROM posts WHERE id = :id LIMIT 1",
      array('id' => $id),
      $conn
  );
  // return $query;
  if ( $query ) {
    return $query->fetchAll();
  }
}
