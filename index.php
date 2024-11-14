<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';




// Initialize a new instance of a class
$db = new Database();

// Calling the query method
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
