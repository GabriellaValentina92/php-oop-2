<?php 
include_once __DIR__ . '/Products.php';

class Kennel extends Products {
    public string $kennelSize;
    public string $materials;
    public string $colors;
    public int $quantity;

    public function __construct($nameproduct, $category, $price, $description, $discount, $kennelSize, $materials, $colors, $quantity)
    {
        parent::__construct($nameproduct, $category, $price, $description, $discount);
        $this-> kennelSize = $kennelSize;
        $this-> materials = $materials;
        $this-> colors = $colors;
        $this-> quantity = $quantity;
    }
}

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