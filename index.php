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

$base = new Tariff\TariffBase(5, 60);
$service = new Service\ServiceDriver();
echo $base->countPrice() + $base->addService($service) . '<br>';
echo $base->addService($service) . '<br>';
echo '<pre>';
print_r($base->getServices());
$service = new Service\ServiceGps(60);
echo $base->countPrice() + $base->addService($service) . '<br>';
//$base = new Tariff\TariffBase(5, -60);

$hourly = new Tariff\TariffHourly(5, 70);
$service = new Service\ServiceGps(70);
echo $hourly->countPrice() + $hourly->addService($service) . '<br>';

$student = new Tariff\TariffStudent(5, 60);
$service = new Service\ServiceGps(60);
echo $student->countPrice() + $student->addService($service) . '<br>';