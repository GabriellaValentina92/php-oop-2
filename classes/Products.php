<?php
class Products {
    protected string $nameproduct;
    protected string $category;
    protected int $price;
    protected string $description;
    protected int $discount;

    public function __construct($nameproduct, $category, $price, $description, $discount)
    {
        $this->nameproduct = $nameproduct;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
        $this->discount = $discount;
    }

    
}

$product = new Products('', 'Dog/Cat', '', '', '', '');
var_dump($product);