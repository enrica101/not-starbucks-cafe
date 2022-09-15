<?php
declare(strict_types = 1);

class Customer{
    private int $customerNo = 0;
    private int $orderNo = 0;
    private String $firstName = '';
    private String $lastName = '';

    // public function __constructor(int $customerNo, String $firstName, String $lastName){
    //     $this->customerNo = $customerNo;
    //     $this->firstName = $firstName;
    //     $this->lastName = $lastName;
    // }

    public function setCustomerNo(int $customerNo){
        $this->customerNo = $customerNo;
        return $this;
    }
    public function setOrderNo(int $orderNo){
        $this->orderNo = $orderNo;
        return $this;
    }
    public function setFirstName(String $firstName){
        $this->firstName = $firstName;
        return $this;
    }
    public function setLastName(String $lastName){
        $this->lastName = $lastName;
        return $this;
    }

    public function getCustomerNo(): int{
        return $this->customerNo;
    }

    public function getOrderNo(): int{
        return $this->orderNo;
    }

    public function getFullName(): String{
        return $this->firstName." ".$this->lastName;
    }
}