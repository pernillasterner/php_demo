# PHP for Beginners

A basic project demonstrating how to build a simple PHP application with partials, views, controllers, and a basic router. TailwindCSS is also used to quickly implement modern and responsive styling.



### Separating URI and Query in PHP

To separate the URI path and query parameters in PHP, you can use the `parse_url` function.

```php

$uri = "/contact?name=johndoe";
print_r(parse_url($uri));


// Output
array(2) {
    ["path"] =>
    string(8) "/contact"
    ["query"] =>
    string(12) "name=johndoe"
}
```


### Securely Querying a Database with Placeholders

Using placeholders in SQL queries is important for security reasons. It helps to protect the db from SQL injection attacks.

```php
// Retrieving the 'id' parameter from the URL (?id=2)
$id = $_GET['id'];

// Creating the query with a placeholder
$query = "select * from posts where id = :id";

// Executing the query and binding the placeholder with the actual value of $id.
$posts = $db->query($query, [':id' => $id])->fetch();

// Output the data
dd($posts);
```