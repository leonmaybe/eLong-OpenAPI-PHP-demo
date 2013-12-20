<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelOrderCreateRequest{
    private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setAffiliateConfirmationId($AffiliateConfirmationId){
        $this->apiParas["AffiliateConfirmationId"] = $AffiliateConfirmationId;
    }
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
    public function setCustomerType($CustomerType){
        $this->apiParas["CustomerType"] = $CustomerType;
    }
    public function setPaymentType($PaymentType){
        $this->apiParas["PaymentType"] = $PaymentType;
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
    public function setCurrencyCode($CurrencyCode){
        $this->apiParas["CurrencyCode"] = $CurrencyCode;
    }
    public function setTotalPrice($TotalPrice){
        $this->apiParas["TotalPrice"] = $TotalPrice;
    }
    public function setCustomerIPAddress($CustomerIPAddress){
        $this->apiParas["CustomerIPAddress"] = $CustomerIPAddress;
    }
    public function setIsGuaranteeOrCharged($IsGuaranteeOrCharged){
        $this->apiParas["IsGuaranteeOrCharged"] = $IsGuaranteeOrCharged;
    }
    public function setSupplierCardNo($SupplierCardNo){
        $this->apiParas["SupplierCardNo"] = $SupplierCardNo;
    }
    public function setConfirmationType($ConfirmationType){
        $this->apiParas["ConfirmationType"] = $ConfirmationType;
    }
    public function setConfirmationLanguage($ConfirmationLanguage){
        $this->apiParas["ConfirmationLanguage"] = $ConfirmationLanguage;
    }
    public function setNoteToHotel($NoteToHotel){
        $this->apiParas["NoteToHotel"] = $NoteToHotel;
    }
    public function setNoteToElong($NoteToElong){
        $this->apiParas["NoteToElong"] = $NoteToElong;
    }
    public function setIsNeedInvoice($IsNeedInvoice){
        $this->apiParas["IsNeedInvoice"] = $IsNeedInvoice;
    }
    public function setInvoice($Invoice){
        $this->apiParas["Invoice"] = $Invoice;
    }
    public function setContact($Contact){
        $this->apiParas["Contact"] = $Contact;
    }
    public function setCreditCard($CreditCard){
        $this->apiParas["CreditCard"] = $CreditCard;
    }
    public function setExtendInfo($ExtendInfo){
        $this->apiParas["ExtendInfo"] = $ExtendInfo;
    }
    public function setNightlyRates($NightlyRates){
        $this->apiParas["NightlyRates"] = $NightlyRates;
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
            return "hotel.order.create";
    }
    public function isHttps(){
        return true;
    }
}
?>
