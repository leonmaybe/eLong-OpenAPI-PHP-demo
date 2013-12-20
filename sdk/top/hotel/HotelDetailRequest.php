<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelDetailRequest{
    private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setHotelIds($HotelIds){
        $this->apiParas["HotelIds"] = $HotelIds;
    }
    public function setArrivalDate($ArrivalDate){
        $this->apiParas["ArrivalDate"] = $ArrivalDate;
    }
    public function setDepartureDate($DepartureDate){
        $this->apiParas["DepartureDate"] = $DepartureDate;
    }
    public function setRoomTypeId($RoomTypeId){
        $this->apiParas["RoomTypeId"] = $RoomTypeId;
    }
    public function setRatePlanId($RatePlanId){
        $this->apiParas["RatePlanId"] = $RatePlanId;
    }
    public function setOptions($Options){
        $this->apiParas["Options"] = $Options;
    }
    public function setLocal($Local){
        $this->Local=$Local;
    }
    public function setVersion($Version){
        $this->Version=$Version;
    }

    public function getApiParas()
    {
        $apiParas['Version']=$this->Version;
        $apiParas['Local']=$this->Local;
        $apiParas['Request']=$this->apiParas;
        return $apiParas;
    }
    public function getApiMethodName()
    {
            return "hotel.detail";
    }
    public function isHttps(){
        return false;
    }
}
?>
