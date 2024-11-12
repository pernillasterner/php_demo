<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Demo</title>
</head>

<body>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?= $book['name']; ?> (<?= $book['releaseYear'] ?>) </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>