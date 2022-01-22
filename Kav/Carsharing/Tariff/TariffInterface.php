<?php
namespace Kav\Carsharing\Tariff;

interface TariffInterface
{
    public function countPrice();
    public function addService(\Kav\Carsharing\Service\ServiceInterface $service);
}