<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Position{
    public $Longitude;
    public $Latitude;
    public $Radius;
    public function setLongitude($Longitude){
        $this->Longitude=$Longitude;
    }
    public function setLatitude($Latitude){
        $this->Latitude=$Latitude;
    }
    public function setRadius($Radius){
        $this->Radius=$Radius;
    }
}
?>
