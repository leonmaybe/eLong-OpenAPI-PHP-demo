<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: text/html; charset=utf-8');
include_once dirname(dirname(__FILE__)).'/sdk/TopSdk.php';
$c = new TopClient;
$c->appKey = '';
$c->secretKey = '';
$c->user='';
$c->format='json';
$req = new HotelDataRateRequest();
$req->setHotelIds('42407063');
$req->setStartDate(date('Y-m-d',time()+3600*24));
$req->setEndDate(date('Y-m-d',time()+3600*48));
$req->setPaymentType(0);
$resp = $c->execute($req);
echo($resp);
?>
