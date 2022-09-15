<?php
declare(strict_types = 1);

class Consumables{
    private int $itemNo = 0;
    private string $itemName = '';
    private string $consumableType = ''; //beverage or food
    private string $variant = ''; //tea,coffee or frappe
    private string $size = '';
    private int $price = 0;
// setter methods
    public function setItemNo(int $itemNo){
        $this->itemNo = $itemNo;
        return $this;
    }
    public function setItemName(String $itemName){
        $this->itemName = $itemName;
        return $this;
    }
    public function setConsumableType(String $consumableType){
        $this->consumableType = $consumableType;
        return $this;
    }
    public function setVariant(String $variant){
        $this->variant = $variant;
        return $this;
    }
    public function setSize(String $size){
        $this->size = $size;
        return $this;
    }
    public function setPrice(String $price){
        $this->price = $price;
        return $this;
    }
// getter methods
    public function getItemNo(): int{
        return $this->itemNo;
    }
    public function getItemName(): String{
        return $this->itemName;
    }
    public function getConsumableType(): String{
        return $this->consumableType;
    }
    public function getVariant(): String{
        return $this->variant;
    }
    public function getSize(): String{
        $this->size;
    }
    public function getPrice(): int{
        return $this->price;
    }
}