<?php

class Product
{
    private $id, $name, $price;
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice()
    {
        return number_format((float)$this->price, 2, '.', '');
    }

    public function showDetails()
    {
        echo "Product Details\n-ID: {$this->id}\n-Name: {$this->name}\n-Price: {$this->price}\n";
    }
}


$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
