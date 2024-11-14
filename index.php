<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';


// Config data
$config = require('config.php');

// Initialize a new instance of a class
$db = new Database($config['database']);

// Calling the query method
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);
