<?php

class Beverage extends Consumables{

    public function __constructor(int $itemNo, String $itemName, String $consumableType, String $variant, String $size, int $price){
        $this->itemNo = $itemNo;
        $this->itemName = $itemName;
        $this->consumableType = $consumableType;
        $this->variant = $variant;
        $this->size = $size;
        $this->price = $price;
        return $this;
    }

}