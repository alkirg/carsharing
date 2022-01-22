<?php
namespace Kav\Carsharing\Tariff;

class TariffBase extends AbstractTariff
{
    const PRICE_PER_KM = 10;
    const PRICE_PER_MINUTE = 3;

    protected function countMinutePrice(int $minutes)
    {
        return self::PRICE_PER_MINUTE * $minutes;
    }

    public function __construct()
    {
        parent::__construct(self::PRICE_PER_KM);
    }
}