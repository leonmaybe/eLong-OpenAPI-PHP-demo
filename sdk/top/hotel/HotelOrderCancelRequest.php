<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class HotelOrderCancelRequest{
     private $apiParas=array();
    private $Version='1.0';
    private $Local='0';
    public function setOrderId($OrderId){
        $this->apiParas["OrderId"] = $OrderId;
    }
    public function setCancelCode($CancelCode){
        $this->apiParas["CancelCode"] = $CancelCode;
    }
    public function setReason($Reason){
        $this->apiParas["Reason"] = $Reason;
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
            return "hotel.order.cancel";
    }
    public function isHttps(){
        return true;
    }
}
?>
