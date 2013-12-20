<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class OrderRooms{
   public $OrderRooms=array();
   public function add($room){
        if(is_array($room)||  is_object($room)){
            array_push($this->OrderRooms, $room);
        }
        
    }
    
}
?>
