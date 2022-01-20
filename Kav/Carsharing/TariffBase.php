<?php
namespace Kav\Carsharing;

class TariffBase extends AbstractTariff
{
    const PRICE_PER_KM = 10;
    const PRICE_PER_MINUTE = 3;

    protected function countMinutes($minutes)
    {
        return $minutes;
    }

    public function __construct()
    {
        parent::__construct(self::PRICE_PER_KM, self::PRICE_PER_MINUTE);
    }
}