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
$req = new HotelOrderCreateRequest();
$req->setAffiliateConfirmationId('222222');
$req->setCustomerIPAddress('127.0.0.1');
$req->setIsGuaranteeOrCharged(false);
$req->setIsNeedInvoice(FALSE);
$req->setHotelId('50101011');
$req->setRoomTypeId('1046');
$req->setRatePlanId(13553);
$req->setArrivalDate('2013-06-10T00:00:00');
$req->setDepartureDate('2013-06-11T00:00:00');
$req->setCustomerType('All');
$req->setPaymentType('SelfPay');
$req->setNumberOfRooms(1);
$req->setNumberOfCustomers(2);
$req->setEarliestArrivalTime('2013-06-10T15:00:00');
$req->setLatestArrivalTime('2013-06-10T18:00:00');
$req->setCurrencyCode('RMB');
$req->setTotalPrice('1450');
$req->setConfirmationType('SMS_cn');
$req->setConfirmationLanguage('zh_CN');

$Contact=new Contact();
$Contact->Name='张飞';
$Contact->Mobile='18611648888';
$Contact->Gender='Female';
$req->setContact($Contact);

$customer1_1=new Customer();
$customer1_1->Name='李静A';
$customer1_1->Mobile='18611648888';
$customer1_1->Gender='Female';

$customer1_2=new Customer();
$customer1_2->Name='李静B';
$customer1_2->Mobile='18611648888';
$customer1_2->Gender='Female';

$customers_1=new Customers();
$customers_1->add($customer1_1);
$customers_1->add($customer1_2);

$OrderRooms=new OrderRooms();
$OrderRooms->add($customers_1);
$req->setOrderRooms($OrderRooms->OrderRooms);

$CreditCard=new CreditCard();
$CreditCard->Number=Xcrypt::encrypt(time().'#4033910000000000', substr($c->appKey,-8));
$CreditCard->CVV='875';
$CreditCard->ExpirationYear='2015';
$CreditCard->ExpirationMonth='06';
$CreditCard->HolderName='wangxu';
$CreditCard->IdType='1';
$CreditCard->IdNo='123456';
$req->setCreditCard($CreditCard);

$resp = $c->execute($req);
echo($resp);
?>
