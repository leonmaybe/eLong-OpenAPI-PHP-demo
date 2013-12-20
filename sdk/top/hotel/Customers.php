<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Customers{
    public $Customers=array();
    public function add($customer){
        if(is_array($customer)||  is_object($customer)){
            array_push($this->Customers, $customer);
        }
        
    }
}
class Customer{
    public $Mobile;
    public $Fax;
    public $Gender;
    public $Phone;
    public $Email;
    public $Name;
    public $Nationality;
     public function setMobile($Mobile){
        $this->Mobile=$Mobile;
    }
    public function setFax($Fax){
        $this->Fax=$Fax;
    }
    public function setGender($Gender){
        $this->Gender=$Gender;
    }
    public function setPhone($Phone){
        $this->Phone=$Phone;
    }
    public function setEmail($Email){
        $this->Email=$Email;
    }
    public function setName($Name){
        $this->Name=$Name;
    }
    public function setNationality($Nationality){
        $this->Nationality=$Nationality;
    }
}
?>
