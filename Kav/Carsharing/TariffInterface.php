<?php
namespace Kav\Carsharing;

interface TariffInterface
{
    public function countPrice(int $kilometers, int $minutes);
    public function addService(ServiceInterface $service);
}