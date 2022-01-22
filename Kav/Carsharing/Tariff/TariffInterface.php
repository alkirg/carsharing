<?php
namespace Kav\Carsharing\Tariff;

interface TariffInterface
{
    public function countPrice(int $kilometers, int $minutes);
    public function addService(\Kav\Carsharing\Service\ServiceInterface $service);
}