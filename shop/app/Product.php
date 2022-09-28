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
        if(!empty($this->price) || $this->quantity != 0) {
            $subtotal = $this->price * $this->quantity;
            return $subtotal;
        } else {
            throw new Exception('Deve essere indicato un prezzo e una quantità');
        }
        

    }

}