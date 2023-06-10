<?php
use ay4t\WhatsAppHelper\WhatsAppSG;
require ('vendor/autoload.php');

$wa         = new WhatsAppSG();
$message    = "Ini adalah latihan mengirim whatapp melalui api gateway";
$wa->setPort('6789')
    ->setSenderPhone('081213798746')
    ->setRecepient('081906011985')
    ->setMessage($message);

var_dump($wa->SendText());
