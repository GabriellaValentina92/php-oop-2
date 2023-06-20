<?php 
include __DIR__ . '/Products.php';

class Kennel extends Products {
    private int $kennelSize;
    private string $materials;
    private string $colors;
    private int $quantity;

    public function __construct($kennelSize, $materials, $colors, $quantity){
        $this-> setSize($kennelSize);
        $this-> setMaterials($materials);
        $this-> setColors($colors);
        $this-> setQuantity($quantity);
    }

    public function setSize($kennelSize){
        $this->kennelSize = $kennelSize;
    }

    public function getSize(){
        return $this->kennelSize;
    }

    public function setMaterials($materials){
        $this->materials = $materials;
    }

    public function getMaterials(){
        return $this->materials;
    }

    public function setColors($colors){
        $this->colors = $colors;
    }

    public function getColor(){
        return $this->colors;
    }

    public function setQuantity($quantity){
        if(!$quantity > 0){
            die('seleziona almeno un prodotto');
        }
        $this->quantity = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }
}

$kennels = new kennel(
    'small, medium, large, extraLarge', 
    'legno,plastica, poliestere', 
    'marrone, nero, blu, grigio, bianco', 
    '1');