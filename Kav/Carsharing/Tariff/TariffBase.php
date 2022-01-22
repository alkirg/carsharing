<?php
namespace Kav\Carsharing\Tariff;

class TariffBase extends AbstractTariff
{
    private float $pricePerKm = 10;
    private float $pricePerMinute = 3;

    protected function countMinutePrice(int $minutes)
    {
        return $this->pricePerMinute * $minutes;
    }

    public function __construct()
    {
        parent::__construct($this->pricePerKm);
    }
}