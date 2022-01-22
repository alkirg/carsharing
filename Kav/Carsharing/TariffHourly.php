<?php
namespace Kav\Carsharing;

class TariffHourly extends AbstractTariff
{
    const PRICE_PER_KM = 0;
    const PRICE_PER_HOUR = 200;

    protected function countMinutePrice(int $minutes)
    {
        return self::PRICE_PER_HOUR * ceil($minutes / 60);
    }

    public function __construct()
    {
        parent::__construct(self::PRICE_PER_KM);
    }
}