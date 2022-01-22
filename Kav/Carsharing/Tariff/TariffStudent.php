<?php
namespace Kav\Carsharing\Tariff;

class TariffStudent extends AbstractTariff
{
    private float $pricePerKm = 4;
    private float $pricePerMinute = 1;

    protected function countKmPrice(int $kilometers)
    {
        if ($kilometers <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        return $this->pricePerKm * $kilometers;
    }

    protected function countMinutePrice(int $minutes)
    {
        if ($minutes <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        return $this->pricePerMinute * $minutes;
    }
}