<?php
require_once 'Kav/Carsharing/Service/ServiceInterface.php';
require_once 'Kav/Carsharing/Service/ServiceDriver.php';
require_once 'Kav/Carsharing/Service/ServiceGps.php';
require_once 'Kav/Carsharing/Tariff/TariffInterface.php';
require_once 'Kav/Carsharing/Tariff/AbstractTariff.php';
require_once 'Kav/Carsharing/Tariff/TariffBase.php';
require_once 'Kav/Carsharing/Tariff/TariffHourly.php';
require_once 'Kav/Carsharing/Tariff/TariffStudent.php';

use \Kav\Carsharing\Tariff;
use \Kav\Carsharing\Service;

$base = new Tariff\TariffBase();
$service = new Service\ServiceDriver();
echo $base->countPrice(5, 60) + $base->addService($service) . '<br>';
$service = new Service\ServiceGps(60);
echo $base->countPrice(5, 60) + $base->addService($service) . '<br>';
//echo $base->countPrice(5, -60) + $base->addService($service) . '<br>';

$hourly = new Tariff\TariffHourly();
$service = new Service\ServiceGps(70);
echo $hourly->countPrice(5, 70) + $hourly->addService($service) . '<br>';

$student = new Tariff\TariffStudent();
$service = new Service\ServiceGps(60);
echo $student->countPrice(5, 60) + $student->addService($service) . '<br>';