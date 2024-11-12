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
    $books = ["Book 1", "Book 2", "Book 3"];

    ?>

    <ul>
        <?php
        // foreach ($books as $book) {
        //     echo "<li>{$book}</li>";
        // }
        ?>

        <?php
        foreach ($books as $book) : ?>
            <li><?= $book; ?></li>
        <?php endforeach; ?>

    </ul>
</body>

</html>