# PHP for Beginners

A basic project demonstrating how to build a simple PHP application with partials, views, controllers, and a basic router. TailwindCSS is also used to quickly implement modern and responsive styling.



### Separating URI and Query in PHP

To separate the URI path and query parameters in PHP, you can use the `parse_url` function.

```php
<?php
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