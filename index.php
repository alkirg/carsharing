<?php
require_once 'Kav/Carsharing/Service/ServiceInterface.php';
require_once 'Kav/Carsharing/Service/Service.php';
require_once 'Kav/Carsharing/Tariff/TariffInterface.php';
require_once 'Kav/Carsharing/Tariff/AbstractTariff.php';
require_once 'Kav/Carsharing/Tariff/TariffBase.php';
require_once 'Kav/Carsharing/Tariff/TariffHourly.php';
require_once 'Kav/Carsharing/Tariff/TariffStudent.php';

use \Kav\Carsharing\Tariff as Tariff;
use \Kav\Carsharing\Service as Service;

$base = new Tariff\TariffBase();
$service = new Service\Service(0, true);
echo $base->countPrice(5, 60) + $base->addService($service) . '<br>';
$service = new Service\Service(60, false);
echo $base->countPrice(5, 60) + $base->addService($service) . '<br>';
//echo $base->countPrice(5, -60) + $base->addService($service) . '<br>';

$hourly = new Tariff\TariffHourly();
$service = new Service\Service(70, false);
echo $hourly->countPrice(5, 70) + $base->addService($service) . '<br>';

$student = new Tariff\TariffStudent();
$service = new Service\Service(60, false);
echo $student->countPrice(5, 60) + $base->addService($service) . '<br>';