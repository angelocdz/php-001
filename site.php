<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php

    class Book {
      var $title;
      var $author;
      var $pages;
    }

    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    // echo $book1->title;
    // echo $book1->author;

    $book2 = new Book;
    $book2->title = "Lord Of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;

    echo $book2->author;

  ?>
</body>
</html>
