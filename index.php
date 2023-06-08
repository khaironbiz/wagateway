<?php
use ay4t\WhatsAppHelper\WhatsAppSG;
require ('vendor/autoload.php');

$wa     = new WhatsAppSG();
$message    = "Ini adalah latihan mengirim whatapp melalui api gateway";
$wa->setPort('6789')
    ->setSenderPhone('081213798746')
    ->setRecepient('081519850159')
    ->setMessage('test kirim wa?');

var_dump($wa->SendText());
