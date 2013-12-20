<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Recipient{
    public $Province;
    public $City;
    public $District;
    public $Street;
    public $PostalCode;
    public $Name;
    public $Phone;
    public $Email;
    public function setProvince($Province){
        $this->Province=$Province;
    }
    public function setCity($City){
        $this->City=$City;
    }
    public function setDistrict($District){
        $this->District=$District;
    }
    public function setStreet($Street){
        $this->Street=$Street;
    }
    public function setPostalCode($PostalCode){
        $this->PostalCode=$PostalCode;
    }
    public function setName($Name){
        $this->Name=$Name;
    }
    public function setPhone($Phone){
        $this->Phone=$Phone;
    }
    public function setEmail($Email){
        $this->Email=$Email;
    }
}
?>
