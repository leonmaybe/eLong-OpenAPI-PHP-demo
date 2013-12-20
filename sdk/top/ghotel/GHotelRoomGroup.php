<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class GHotelRoom{
    public $childAges;
    public $numberOfAdults;
    public $numberOfChildren;
    
    public function setChildAges($childAges){
        $this->childAges=$childAges;
    }
    public function setNumberOfAdults($numberOfAdults){
        $this->numberOfAdults=$numberOfAdults;
    }
    public function setNumberOfChildren($numberOfChildren){
        $this->numberOfChildren=$numberOfChildren;
    }

}
class GHotelRoomGroup{
    public $roomgroup=array();
    public function add($room){
        if(is_array($room)||  is_object($room)){
            array_push($this->roomgroup, $room);
        }
        
    }
}
?>
