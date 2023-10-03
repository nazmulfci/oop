<?php
class Product {
    // TODO: Add properties
    public $id;
    public $name;
    public $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;

    }


    // TODO: Add getFormattedPrice method
    public function getFormattedPrice() {
        return '$' . $this->price;
    }

    // TODO: Add showDetails method
    public function showDetails() {
        echo 'Product Details: <br>';
        echo 'ID: ' . $this->id . '<br>';
        echo 'Name: ' . $this->name . '<br>';
        echo 'Price: ' . $this->getFormattedPrice() . '<br>';
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

