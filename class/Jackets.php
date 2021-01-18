<?php
    
    include_once __DIR__ . '/Product.php';

    class Jackets extends Product{

    //Methods
    public function getDiscount(){
        if ($this->availability < 10){
            $this->discount = 40;
        } elseif ($this->availability < 20){
            $this->discount = 20;
        };
        return $this->discount;
    }
    
    public function makeDiscount(){
        return $this->price - ($this->price * $this->discount/100);

    }
            

    }

?>