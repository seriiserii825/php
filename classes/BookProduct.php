<?php

class BookProduct extends Product
{
    public $pagesCount;


    public function __construct($name, $price, $pagesCount)
    {
        parent::__construct($name, $price);
        $this->pagesCount = $pagesCount;
    }

    public function getProduct()
    {
        $out = parent::getProduct(); // TODO: Change the autogenerated stub
        $out .= "<strong>Pages count: $this->pagesCount</strong>";
        return $out;
    }

    public function addProduct($name, $price)
    {
        // TODO: Implement addProduct() method.
    }
}