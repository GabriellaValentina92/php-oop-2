<?php 
include_once __DIR__ . '/Products.php';

class Toys extends Products {
    private string $bestseller;
    private string $puppytoys;
    private string $seniortoys;

    public function __construct($bestseller, $puppytoys, $seniortoys)
    {
        parent::__construct($nameproduct, $category, $price, $description, $discount);
        $this-> bestseller = $bestseller;
        $this-> puppytoys = $puppytoys;
        $this-> seniortoys = $seniortoys;
    }
}