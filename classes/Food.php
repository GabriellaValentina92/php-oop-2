<?php
include __DIR__ . '/Products.php';


class Food extends Products{
    private string $composition;
    private string $calories;
    private string $formatSizes;

    public function __construct($composition, $calories, $formatSizes)
    {
        $this-> setComposition($composition);
        $this-> setCalories($calories);
        $this-> setSizes($formatSizes);
    }

    public function setComposition($composition){
        $this->composition = $composition;
    }

    public function getComposition(){
        return $this->composition;
    }

    public function setCalories($calories){
        $this->calories = $calories;
    }

    public function getCalories(){
        return $this->calories;
    }

    public function setSizes($formatSizes){
        $this->formatSizes = $formatSizes;
    }

    public function getSizes(){
        return $this->formatSizes;
    }
}

$foods = new Food (
    'carboidrati, proteine, grassi, zuccheri',
    '450kcal', 
    '350g, 500g, 750g, 1kg, 3kg, 5kg');