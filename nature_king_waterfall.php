<?php

// define local variables
$companyName = 'Craft Spirits';
$location = 'Local Farms';
$products = 'Small-Batch Spirits';

// create class
class Distillery  {
    
    // establish properties
    public $name;
    public $location;
    public $products;
    
    // constructor
    public function __construct($name, $location, $products){
        $this->name = $name;
        $this->location = $location;
        $this->products = $products;
    }
    
    // methods
    public function getName(){
        return $this->name;
    }
    
    public function getLocation(){
        return $this->location;
    }
    
    public function getProducts(){
        return $this->products;
    }
    
    public function setName($name){
        $this->name = $name;
    }
    
    public function setLocation($location){
        $this->location = $location;
    }
    
    public function setProducts($products){
        $this->products = $products;
    }

}

// instantiate object
$distillery = new Distillery($companyName, $location, $products);

// print results
echo 'A distillery that creates delicious, small-batch craft spirits using locally sourced ingredients: ';
echo $distillery->getName() . ' located in ' . $distillery->getLocation() . ' creates ' . $distillery->getProducts() . '.';

?>