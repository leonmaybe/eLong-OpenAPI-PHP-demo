<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelOrderUpdateRequest{
    private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setOrderId($OrderId){
        $this->apiParas["OrderId"] = $OrderId;
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
    public function setRatePlanCode($RatePlanCode){
        $this->apiParas["RatePlanCode"] = $RatePlanCode;
    }
    public function setNumberOfRooms($NumberOfRooms){
        $this->apiParas["NumberOfRooms"] = $NumberOfRooms;
    }
    public function setNumberOfCustomers($NumberOfCustomers){
        $this->apiParas["NumberOfCustomers"] = $NumberOfCustomers;
    }
    public function setEarliestArrivalTime($EarliestArrivalTime){
        $this->apiParas["EarliestArrivalTime"] = $EarliestArrivalTime;
    }
    public function setLatestArrivalTime($LatestArrivalTime){
        $this->apiParas["LatestArrivalTime"] = $LatestArrivalTime;
    }
    public function setIsGuaranteeOrCharged($IsGuaranteeOrCharged){
        $this->apiParas["IsGuaranteeOrCharged"] = $IsGuaranteeOrCharged;
    }
    public function setContact($Contact){
        $this->apiParas["Contact"] = $Contact;
    }
    public function setCreditCard($CreditCard){
        $this->apiParas["CreditCard"] = $CreditCard;
    }
    public function setOrderRooms($OrderRooms){
        $this->apiParas["OrderRooms"] = $OrderRooms;
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
            return "hotel.order.update";
    }
    public function isHttps(){
        return true;
    }
}
?>
