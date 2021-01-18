<?php

    include_once __DIR__ . '/Product.php';

    class Shoes extends Product{

        public $size;

        //Construt
        public function __construct($name, $price, $size){
            parent::__construct($name, $price);
            $this->size = $size;
        }

        //Methods
        public function getDiscount(){
            if ($this->availability < 10){
                $this->discount = 20;
            } elseif ($this->availability < 20){
                $this->discount = 10;
            };
            return $this->discount;
        }
        
        public function makeDiscount(){
            return $this->price - ($this->price * $this->discount/100);

        }

    }

?>