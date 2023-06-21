<?php
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Toys.php';
include __DIR__ . '/classes/Kennel.php';

$foods = new Food (
    'Croccantini',
    'Dog/Cat',
    '1500',
    'Monge croccantini salutari che danno energia',
    '20%',
    'carboidrati, proteine, grassi, zuccheri',
    '450', 
    '350g, 500g, 750g, 1kg, 3kg, 5kg'
);

$toy = new Toys(
    'tiragraffi',
    'Dog/Cat',
    '2500',
    'Prodotto ottimo per aiutare il vostro gatto a limare gli artigli!',
    '20%',
    'tiragraffi, osso, corda da masticare', 
    'peluche, pallina', 
    'snack roll, tappetino snif sniff, poker box'
);

$kennels = new kennel(
    'DogHouse',
    'Dog/Cat',
    '2000',
    'Cuccetta morbida e confortevole per i vostri animali',
    '20%',
    'small, medium, large, extraLarge', 
    'legno,plastica, poliestere', 
    'marrone, nero, blu, grigio, bianco', 
    '1'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet shop</title>
</head>
<body>
    <div class="container">
        <div class="card"></div>
    </div>
</body>
</html>