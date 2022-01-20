<?php
namespace Kav\Carsharing;

class TariffStudent extends AbstractTariff
{
    const PRICE_PER_KM = 4;
    const PRICE_PER_MINUTE = 1;

    protected function countMinutes($minutes)
    {
        return $minutes;
    }

    public function __construct()
    {
        parent::__construct(self::PRICE_PER_KM, self::PRICE_PER_MINUTE);
    }
}