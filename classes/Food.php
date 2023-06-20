<?php
include __DIR__ . '/Products.php';


class Food extends Product{
    private string $composition;
    private string $calorie;
    private string $sizes;
    private string $discount;
}