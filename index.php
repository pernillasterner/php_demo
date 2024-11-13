<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

// parse will separate the path from the query string

dd(parse_url($uri));

// Results
// contact?name=johndoe
// array(2) {
//     ["path"]=>
//     string(8) "/contact"
//     ["query"]=>
//     string(12) "name=johndoe"
//   }

if ($uri === '/') {
    require 'controllers/index.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
} else if ($uri === '/contact') {
    require 'controllers/contact.php';
}
