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
$req = new HotelOrderListRequest();
$req->setCreationTimeFrom('2013-05-01');
$req->setCreationTimeTo('2013-05-10');
$req->setPageIndex(1);
$resp = $c->execute($req);
echo($resp);
?>
