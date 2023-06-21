<?php 
include_once __DIR__ . '/Products.php';

class Toys extends Products {
    public string $bestseller;
    public string $puppytoys;
    public string $seniortoys;

    public function __construct($nameproduct, $category, $price, $description, $discount, $bestseller, $puppytoys, $seniortoys)
    {
        parent::__construct($nameproduct, $category, $price, $description, $discount);
        $this-> bestseller = $bestseller;
        $this-> puppytoys = $puppytoys;
        $this-> seniortoys = $seniortoys;
    }
}