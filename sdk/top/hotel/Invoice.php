<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Invoice{
    public $Title;
    public $ItemName;
    public $Amount;
    public $Recipient;
    public function setTitle($Title){
        $this->Title=$Title;
    }
    public function setItemName($ItemName){
        $this->ItemName=$ItemName;
    }
    public function setAmount($Amount){
        $this->Amount=$Amount;
    }
    public function setRecipient($Recipient){
        $this->Recipient=$Recipient;
    }
}
?>
