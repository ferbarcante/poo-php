<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $books = [
            [
                'name' => "Irmãos Karamazov",
                'author' => "Fiodor Dostoievsky",
                'price' => 70.00
            ],
            [
                'name' => 'Meditaçoes',
                'author' => 'Marco Aurelio',
                'price' => 20
            ],
            [
                'name' => "Noites Brancas",
                'author' => "Fiodor Dostoievsky",
                'price' => 60
            ]

        ];


    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if($book['author']  == 'Fiodor Dostoievsky') : ?>
                 <li><?= $book['name']; ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>

