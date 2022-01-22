<?php
namespace Kav\Carsharing\Tariff;

class TariffHourly extends AbstractTariff
{
    private float $pricePerKm = 0;
    private float $pricePerHour = 200;

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
        return $this->pricePerHour * ceil($minutes / 60);
    }
}