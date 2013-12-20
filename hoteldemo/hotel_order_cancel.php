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
$req = new HotelOrderCancelRequest();
$req->setOrderId('43148629');
$req->setCancelCode('1');
$resp = $c->execute($req);
echo($resp);
?>
