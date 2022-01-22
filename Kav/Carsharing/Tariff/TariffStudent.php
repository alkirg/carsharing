<?php
namespace Kav\Carsharing\Tariff;

class TariffStudent extends AbstractTariff
{
    private float $pricePerKm = 4;
    private float $pricePerMinute = 1;

    protected function countMinutePrice(int $minutes)
    {
        return $this->pricePerMinute * $minutes;
    }

    public function __construct()
    {
        parent::__construct($this->pricePerKm);
    }
}