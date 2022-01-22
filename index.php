<?php
require_once 'Kav/Carsharing/ServiceInterface.php';
require_once 'Kav/Carsharing/Service.php';
require_once 'Kav/Carsharing/TariffInterface.php';
require_once 'Kav/Carsharing/AbstractTariff.php';
require_once 'Kav/Carsharing/TariffBase.php';
require_once 'Kav/Carsharing/TariffHourly.php';
require_once 'Kav/Carsharing/TariffStudent.php';

use \Kav\Carsharing\TariffBase;
use \Kav\Carsharing\TariffHourly;
use \Kav\Carsharing\TariffStudent;
use \Kav\Carsharing\Service;

$base = new TariffBase();
$service = new Service(0, true);
echo $base->countPrice(5, 60) + $base->addService($service) . '<br>';
$service = new Service(60, false);
echo $base->countPrice(5, 60) + $base->addService($service) . '<br>';
//echo $base->countPrice(5, -60) + $base->addService($service) . '<br>';

$hourly = new TariffHourly();
$service = new Service(70, false);
echo $hourly->countPrice(5, 70) + $base->addService($service) . '<br>';

$student = new TariffStudent();
$service = new Service(60, false);
echo $student->countPrice(5, 60) + $base->addService($service) . '<br>';