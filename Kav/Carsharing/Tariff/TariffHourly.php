<?php
namespace Kav\Carsharing\Tariff;

class TariffHourly extends AbstractTariff
{
    private float $pricePerHour = 200;

    protected function countKmPrice(int $kilometers)
    {
        return 0;
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