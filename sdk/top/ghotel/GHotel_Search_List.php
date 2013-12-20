<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class GHotel_Search_List{
    private $checkInDate;
    private $checkOutDate;
    private $destinationId;
    private $RoomGroup=array();
    private $pageIndex;
    private $pageSize;
    private $apiParas = array();
    public function setCheckInDate($checkInDate){
        $this->checkInDate=$checkInDate;
        $this->apiParas["checkInDate"] = $checkInDate;
    }
    public function setCheckOutDate($checkOutDate){
        $this->checkOutDate=$checkOutDate;
        $this->apiParas["checkOutDate"] = $checkOutDate;
    }
    public function setDestinationId($destinationId){
        $this->destinationId=$destinationId;
        $this->apiParas["destinationId"] = $destinationId;
    }
    public function setRoomGroup($RoomGroup){
            $this->RoomGroup=$RoomGroup;
            $this->apiParas["RoomGroup"] = $RoomGroup;
    }
    public function setPageIndex($pageIndex){
        $this->pageIndex=$pageIndex;
        $this->apiParas["pageIndex"] = $pageIndex;
    }
    public function setPageSize($pageSize){
        $this->pageSize=$pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }
    public function getApiParas()
    {
            return $this->apiParas;
    }
    public function getApiMethodName()
    {
            return "ghotel.search.list";
    }
    public function isHttps(){
        return false;
    }
}
?>
