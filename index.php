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

        function filterByAuthor($books, $author){
            $filteredBooks = [];

            foreach ($books as $book){
                if($book['author'] === $author){
                    $filteredBooks = $book;
                }
            }

            return $filteredBooks;
            
        }


    ?>

    <ul>
        
    </ul>
</body>
</html>

