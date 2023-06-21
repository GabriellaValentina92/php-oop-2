<?php
include_once __DIR__ . '/Products.php';


class Food extends Products{
    public string $composition;
    public int $calories;
    public string $formatSizes; 

    public function __construct($composition, $calories, $formatSizes)
    {
        parent::__construct($nameproduct, $category, $price, $description, $discount);
        $this-> composition = $composition;
        $this-> calories = $calories;
        $this-> formatSizes = $formatSizes;
    }
  
}
