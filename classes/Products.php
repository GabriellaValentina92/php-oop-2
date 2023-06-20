<?php

class Product {
    private string $nameproduct;
    private string $category;
    private int $price;
    private string $description;
    private string $reviews;
    private string $discount;

    public function __construct($nameproduct, $category, $price, $description, $reviews, $discount)
    {
        $this->nameproduct = $nameproduct;
        $this->category = $category;
        $this->price = $price;
        $this->description = $description;
        $this->reviews = $reviews;
        $this->discount = $discount;
    }
}