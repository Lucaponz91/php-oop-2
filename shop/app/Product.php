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

    // function __construct($name, $price=0, $poster, $description, $weight, $volume, $brand, $categories)
    function __construct($param)
    {
        $this->name = $param['name'];        
        // $this->poster = $param['poster'];
        $this->description = $param['description'];
        $this->weight = $param['weight'];
        // $this->volume = $param['volume'];
        // $this->brand = $param['brand'];
        // $this->categories = $param['categories'];
        $this->price = $param['price'];
    }
    public function setPrice($price){

    }

}