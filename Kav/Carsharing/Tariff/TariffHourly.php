<?php
namespace Kav\Carsharing\Tariff;

class TariffHourly extends AbstractTariff
{
    private float $pricePerKm = 0;
    private float $pricePerHour = 200;

    protected function countKmPrice(int $kilometers)
    {
        return $this->pricePerKm * $kilometers;
    }

    protected function countMinutePrice(int $minutes)
    {
        return $this->pricePerHour * ceil($minutes / 60);
    }
}