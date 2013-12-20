<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelListRequest{
    private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setArrivalDate($ArrivalDate){
        $this->apiParas["ArrivalDate"] = $ArrivalDate;
    }
    public function setDepartureDate($DepartureDate){
        $this->apiParas["DepartureDate"] = $DepartureDate;
    }
    public function setCityId($CityId){
        $this->apiParas["CityId"] = $CityId;
    }
    public function setQueryText($QueryText){
        $this->apiParas["QueryText"] = $QueryText;
    }
    public function setPaymentType($PaymentType){
        $this->apiParas["PaymentType"] = $PaymentType;
    }
    public function setProductProperties($ProductProperties){
        $this->apiParas["ProductProperties"] = $ProductProperties;
    }
    public function setFacilities($Facilities){
        $this->apiParas["Facilities"] = $Facilities;
    }
    public function setStarRate($StarRate){
        $this->apiParas["StarRate"] = $StarRate;
    }
    public function setBrandId($BrandId){
        $this->apiParas["BrandId"] = $BrandId;
    }
    public function setGroupId($GroupId){
        $this->apiParas["GroupId"] = $GroupId;
    }
    public function setLowRate($LowRate){
        $this->apiParas["LowRate"] = $LowRate;
    }
    public function setHighRate($HighRate){
        $this->apiParas["HighRate"] = $HighRate;
    }
    public function setDistrictId($DistrictId){
        $this->apiParas["DistrictId"] = $DistrictId;
    }
    public function setLocationId($LocationId){
        $this->apiParas["LocationId"] = $LocationId;
    }
    public function setSort($Sort){
        $this->apiParas["Sort"] = $Sort;
    }
    public function setPageIndex($PageIndex){
        $this->apiParas["PageIndex"] = $PageIndex;
    }
    public function setPageSize($PageSize){
        $this->apiParas["PageSize"] = $PageSize;
    }
    public function setCustomerType($CustomerType){
        $this->apiParas["CustomerType"] = $CustomerType;
    }
    public function setResultType($ResultType){
        $this->apiParas["ResultType"] = $ResultType;
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
            return "hotel.list";
    }
    public function isHttps(){
        return false;
    }
}
?>
