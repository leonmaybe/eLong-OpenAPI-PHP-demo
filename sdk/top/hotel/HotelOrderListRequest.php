<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelOrderListRequest{
     private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setHotelId($HotelId){
        $this->apiParas["HotelId"] = $HotelId;
    }
    public function setCreationTimeFrom($CreationTimeFrom){
        $this->apiParas["CreationTimeFrom"] = $CreationTimeFrom;
    }
    public function setCreationTimeTo($CreationTimeTo){
        $this->apiParas["CreationTimeTo"] = $CreationTimeTo;
    }
    public function setRoomTypeId($RoomTypeId){
        $this->apiParas["RoomTypeId"] = $RoomTypeId;
    }
    public function setRatePlanId($RatePlanId){
        $this->apiParas["RatePlanId"] = $RatePlanId;
    }
    public function setArrivalDateFrom($ArrivalDateFrom){
        $this->apiParas["ArrivalDateFrom"] = $ArrivalDateFrom;
    }
     public function setArrivalDateTo($ArrivalDateTo){
        $this->apiParas["ArrivalDateTo"] = $ArrivalDateTo;
    }
     public function setDepartureDateFrom($DepartureDateFrom){
        $this->apiParas["DepartureDateFrom"] = $DepartureDateFrom;
    }
     public function setDepartureDateTo($DepartureDateTo){
        $this->apiParas["DepartureDateTo"] = $DepartureDateTo;
    }
     public function setMobile($Mobile){
        $this->apiParas["Mobile"] = $Mobile;
    }
     public function setCustomerName($CustomerName){
        $this->apiParas["CustomerName"] = $CustomerName;
    }
     public function setStatus($Status){
        $this->apiParas["Status"] = $Status;
    }
     public function setPageIndex($PageIndex){
        $this->apiParas["PageIndex"] = $PageIndex;
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
            return "hotel.order.list";
    }
    public function isHttps(){
        return true;
    }
}
?>
