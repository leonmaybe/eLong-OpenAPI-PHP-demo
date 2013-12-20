<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class NightlyRates{
    public $NightlyRate;
    public $Date;
    public $CurrencyCode;
    public $Rate;
    public $Email;
    public $Name;
     public function setNightlyRate($NightlyRate){
        $this->NightlyRate=$NightlyRate;
    }
    public function setDate($Date){
        $this->Date=$Date;
    }
    public function setCurrencyCode($CurrencyCode){
        $this->CurrencyCode=$CurrencyCode;
    }
    public function setRate($Rate){
        $this->Rate=$Rate;
    }
}
?>
