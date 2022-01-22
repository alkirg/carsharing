<?php
namespace Kav\Carsharing\Tariff;

class TariffBase extends AbstractTariff
{
    private float $pricePerKm = 10;
    private float $pricePerMinute = 3;

    protected function countKmPrice(int $kilometers)
    {
        return $this->pricePerKm * $kilometers;
    }

    protected function countMinutePrice(int $minutes)
    {
        return $this->pricePerMinute * $minutes;
    }
}