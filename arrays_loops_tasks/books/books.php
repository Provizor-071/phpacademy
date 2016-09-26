<?php


$book1 = array(
    'author' => 'S. King',
    'title' => 'Carrie',
    'price' => 123.50
);
$book2 = array(
    'author' => 'F. Dostoevskii',
    'title' => 'Idiot',
    'price' => 223.50
);
$book3 = array(
    'author' => 'B. Stoker',
    'title' => 'Dracula',
    'price' => 315.76
);
$books = array($book1, $book2, $book3);
$a = 2;
switch ($a) {
    case 1: echo 'One'; break;
    case 2: echo 'Two'; break;
    case 3: echo 'Three'; break;
    case 4: echo 'Four'; break;
    case 5: echo 'Five'; break;
    case 6: echo 'Six'; break;
    case 7: echo 'Seven'; break;
    default: echo 'I dont know';
}
//exit();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h1>Books (var 1)</h1>

<?php foreach ($books as $book) :
    foreach ($book as $key => $value) : ?>
        <?=$key ?> : <?=$value?>
        <br>
    <?php endforeach;
    echo '<hr>';
endforeach; ?>

<hr>

<?php foreach ($books as $book) : ?>
    Title: <?=$book['title']?> <br>
    Author: <?=$book['author']?> <br>
    Price: <?=$book['price']?> <br>
    <hr>
<?php endforeach; ?>