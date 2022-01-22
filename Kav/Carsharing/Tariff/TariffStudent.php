<?php
namespace Kav\Carsharing\Tariff;

class TariffStudent extends AbstractTariff
{
    private float $pricePerKm = 4;
    private float $pricePerMinute = 1;

    protected function countKmPrice(int $kilometers)
    {
        return $this->pricePerKm * $kilometers;
    }

    protected function countMinutePrice(int $minutes)
    {
        return $this->pricePerMinute * $minutes;
    }
}