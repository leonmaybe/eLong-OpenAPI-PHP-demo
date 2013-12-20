<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CreditCard{
    public $Number;
    public $CVV;
    public $ExpirationYear;
    public $ExpirationMonth;
    public $HolderName;
    public $IdType;
    public $IdNo;
    public function setNumber($Number){
        $this->Number=$Number;
    }
    public function setCVV($CVV){
        $this->CVV=$CVV;
    }
    public function setExpirationYear($ExpirationYear){
        $this->ExpirationYear=$ExpirationYear;
    }
    public function setExpirationMonth($ExpirationMonth){
        $this->ExpirationMonth=$ExpirationMonth;
    }
    public function setHolderName($HolderName){
        $this->HolderName=$HolderName;
    }
    public function setIdType($IdType){
        $this->IdType=$IdType;
    }
    public function setIdNo($IdNo){
        $this->IdNo=$IdNo;
    }
}
?>
