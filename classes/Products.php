<?php
class Products {
    protected string $nameproduct;
    protected string $category;
    protected int $price;
    protected string $description;
    protected string $discount;

    public function __construct($nameproduct, $category, $price, $description, $discount)
    {
        $this->nameproduct = $nameproduct;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
        $this->discount = $discount;
    }

    
}

$product = new Products('', 'Dog/Cat', '3000', 'Prodotti Animali', '20%');
var_dump($product);