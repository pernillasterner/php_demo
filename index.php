<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Demo</title>
</head>

<body>

    <h1>Recommended Books</h1>

    <?php
    $books = [[
        'name' => 'Book 1',
        'author' => 'Author 1',
        'url' => 'exemple1.com'
    ], [
        'name' => 'Book 2',
        'author' => 'Author 2',
        'url' => 'exemple2.com'
    ]];

    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>