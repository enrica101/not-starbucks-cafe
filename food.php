<?php 

class Food extends Consumables{

    public function __constructor(int $itemNo, String $itemName, String $consumableType, String $variant, int $price){
        $this->itemNo = $itemNo;
        $this->itemName = $itemName;
        $this->consumableType = $consumableType;
        $this->variant = $variant;
        $this->price = $price;
        return $this;
    }
}