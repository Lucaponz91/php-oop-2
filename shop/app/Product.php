<?php
class Product {
    public $name;
    public $price;
    public $poster;
    public $description;
    public $weight;
    public $volume;
    public $brand;
    public $categories;

    function __construct($name, $price, $brand, $categories, $quantity)
    // function __construct($param)
    {
        $this->name = $name;        
        
        $this->brand = $brand;
        $this->categories = $categories;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function setPrice(){
        $subtotal = $this->price * $this->quantity;
        return $subtotal;

    }

}