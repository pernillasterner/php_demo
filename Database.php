<?php

// Connect to the database, and execute a query
class Database
{
    public $connection;

    // When and instance is constructed. First thing to run
    public function __construct()
    {
        $config = [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'myapp',
            'charset' => 'utf8mb4'
        ];

        // http_build_query($data); // exemple.com?host=localhost&port=3306&dbname=myapp
        $dsn = 'mysql:' . http_build_query($config, '', ';'); // host=localhost;port=3306;dbname=myapp

        // Setup connection to the MySQL database using PDO (PHP Data Objects).
        // Data Source Name (DNS) specifies the connection details for MySQL: Like a connection string
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        // Initialize the PDO instance to connect to the database
        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
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
