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

require "index.view.php"; //load the view
