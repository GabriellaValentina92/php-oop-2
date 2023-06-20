<?php 
include __DIR__ . '/Products.php';

class Toys extends Products {
    private string $bestseller;
    private string $puppytoys;
    private string $seniortoys;

    public function __construct($bestseller, $puppytoys, $seniortoys){
        $this-> setbestseller($bestseller);
        $this-> setpuppytoys($puppytoys);
        $this-> setseniortoys($seniortoys);

    }

    public function setbestseller($bestseller){
        $this->bestseller = $bestseller;
    }

    public function getsetbestseller(){
        return $this->bestseller;
    }

    public function setpuppytoys($puppytoys){
        $this->puppytoys = $puppytoys;
    }

    public function getpuppytoys(){
        return $this->puppytoys;
    }

    public function setseniortoys($seniortoys){
        $this->seniortoys = $seniortoys;
    }

    public function getseniortoys(){
        return $this->seniortoys;
    }
}

$toy = new Toys('tiragraffi, osso, corda da masticare', 'peluche, pallina', 'snack roll, tappetino snif sniff, poker box');