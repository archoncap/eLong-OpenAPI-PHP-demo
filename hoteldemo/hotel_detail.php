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
$req = new HotelDetailRequest();
$req->setHotelIds('42407063');
$req->setArrivalDate(date('Y-m-d',time()+3600*24));
$req->setDepartureDate(date('Y-m-d',time()+3600*48));
$resp = $c->execute($req);
echo($resp);
?>
