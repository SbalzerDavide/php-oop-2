<?php
class Product{

//Properties
public $name;
public $price;
public $availability;
public $discount = 0;
//public $category;

//Construct
public function __construct($name = 'ciao', $price, $availability=7){
    $this->name = $name;
    $this->price = $price;
    $this->availability = $availability;
}

//Methods
public function getDiscount(){
    echo "Non hai nessuno sconto aplicato su questo prodotto";
}


};

?>
