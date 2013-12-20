<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelDataValidateRequest{
    private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setHotelId($HotelId){
        $this->apiParas["HotelId"] = $HotelId;
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
    public function setEarliestArrivalTime($EarliestArrivalTime){
        $this->apiParas["EarliestArrivalTime"] = $EarliestArrivalTime;
    }
    public function setLatestArrivalTime($LatestArrivalTime){
        $this->apiParas["LatestArrivalTime"] = $LatestArrivalTime;
    }
    public function setTotalPrice($TotalPrice){
        $this->apiParas["TotalPrice"] = $TotalPrice;
    }
    public function setNumberOfRooms($NumberOfRooms){
        $this->apiParas["NumberOfRooms"] = $NumberOfRooms;
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
            return "hotel.data.validate";
    }
    public function isHttps(){
        return false;
    }
}
?>
