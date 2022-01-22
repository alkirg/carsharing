<?php
namespace Kav\Carsharing;

class TariffStudent extends AbstractTariff
{
    const PRICE_PER_KM = 4;
    const PRICE_PER_MINUTE = 1;

    protected function countMinutePrice(int $minutes)
    {
        return self::PRICE_PER_MINUTE * $minutes;
    }

    public function __construct()
    {
        parent::__construct(self::PRICE_PER_KM);
    }
}