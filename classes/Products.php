<?php
class Products {
    private string $nameproduct;
    private string $category;
    private int $price;
    private string $description;
    private string $reviews;
    private int $discount;

    public function __construct($nameproduct, $category, $price, $description, $reviews, $discount)
    {
        $this->setnameproduct($nameproduct);
        $this->setcategory($category);
        $this->setprice($price);
        $this->setdescription($description);
        $this->setreviews($reviews);
        $this->discount = $discount;
    }

    public function setnameproduct($nameproduct){
        $this->nameproduct = $nameproduct;
    }

    public function getnameproduct(){
        return $this->nameproduct;
    }

    public function setcategory($category){
        $this->category = $category;
    }

    public function getcategory(){
        return $this->category;
    }

    public function setprice($price){
        $this->price = $price;
    }

    public function getprice(){
        return $this->price;
    }

    public function setdescription($description){
        $this->description = $description;
    }

    public function getdescription(){
        return $this->description;
    }

    public function setreviews($reviews){
        $this->reviews = $reviews;
    }

    public function getreviews(){
        return $this->reviews;
    }

    public function setdiscount($discount){
        $this->discount = $discount;
    }

    public function getdiscount(){
        return $this->discount;
    }
}

$product = new Products('', 'cane/gatto', '', '', '', '');
var_dump($product);