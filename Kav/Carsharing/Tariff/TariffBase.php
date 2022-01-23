<?php
namespace Kav\Carsharing\Tariff;

class TariffBase extends AbstractTariff
{
    private float $pricePerKm = 10;
    private float $pricePerMinute = 3;

    protected function countKmPrice()
    {
        if ($this->kilometers <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        return $this->pricePerKm * $this->kilometers;
    }

    protected function countMinutePrice()
    {
        if ($this->minutes <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        return $this->pricePerMinute * $this->minutes;
    }
}