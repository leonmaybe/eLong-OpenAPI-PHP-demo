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
$req = new HotelDataValidateRequest();
$req->setHotelId('42407063');
$req->setArrivalDate(date('Y-m-d',time()+3600*24));
$req->setDepartureDate(date('Y-m-d',time()+3600*48));
$req->setEarliestArrivalTime(date('Y-m-d 18:00:00',time()+3600*24));
$req->setLatestArrivalTime(date('Y-m-d 20:00:00',time()+3600*24));
$req->setRoomTypeId('0001');
$req->setRatePlanId('12345');
$req->setNumberOfRooms(1);
$resp = $c->execute($req);
echo($resp);
?>
