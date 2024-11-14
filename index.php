<?php

require 'functions.php';
// require 'router.php';


// Connect to the database, and execute a query
class Database
{

    public function query() {}
}

// New instance of the Database class
$db = new Database();

// Calling the query method
$db->query();

// Setup connection to the MySQL database using PDO (PHP Data Objects).
// Data Source Name (DNS) specifies the connection details for MySQL: Like a connection string
$dns = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

// Initialize the PDO instance to connect to the database
$pdo = new PDO($dns, 'root');

$statement = $pdo->prepare("select * from posts");

// Execute the code
$statement->execute();

// Fetch all posts and remove duplicate array
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
