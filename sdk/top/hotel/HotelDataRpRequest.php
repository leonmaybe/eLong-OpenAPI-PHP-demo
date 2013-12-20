<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelDataRpRequest{
    private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setHotelIds($HotelIds){
        $this->apiParas["HotelIds"] = $HotelIds;
    }
    public function setPaymentType($PaymentType){
        $this->apiParas["PaymentType"] = $PaymentType;
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
            return "hotel.data.rp";
    }
    public function isHttps(){
        return false;
    }
}
?>
