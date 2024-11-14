<?php

require 'functions.php';
// require 'router.php';


// Connect to the database, and execute a query
class Database
{
    public $connection;

    // When and instance is constructed. First thing to run
    public function __construct()
    {
        // Setup connection to the MySQL database using PDO (PHP Data Objects).
        // Data Source Name (DNS) specifies the connection details for MySQL: Like a connection string
        $dns = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

        // Initialize the PDO instance to connect to the database
        $this->connection = new PDO($dns, 'root');
    }

    public function query($query)
    {

        $statement = $this->connection->prepare($query);

        // Execute the code
        $statement->execute();

        // Fetch the results and remove duplicate array
        return $statement;
    }
}

// Initialize a new instance of a class
$db = new Database();

// Calling the query method
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
