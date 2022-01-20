<?php
namespace Kav\Carsharing;

class TariffHourly extends AbstractTariff
{
    const PRICE_PER_KM = 0;
    const PRICE_PER_MINUTE = 200 / 60;

    protected function countMinutes($minutes)
    {
        return ceil($minutes / 60) * $minutes;
    }

    public function __construct()
    {
        parent::__construct(self::PRICE_PER_KM, self::PRICE_PER_MINUTE);
    }
}