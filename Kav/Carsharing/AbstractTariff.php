<?php
namespace Kav\Carsharing;

abstract class AbstractTariff implements TariffInterface, ServiceInterface
{
    private float $pricePerKm;
    private float $pricePerMinute;
    private float $totalPrice;

    abstract protected function countMinutes(int $minutes);

    public function getPricePerKm()
    {
        return $this->pricePerKm;
    }

    public function setPricePerKm($price)
    {
        $this->pricePerKm = $price;
    }

    public function getPricePerMinute()
    {
        return $this->pricePerMinute;
    }

    public function setPricePerMinute($price)
    {
        $this->pricePerMinute = $price;
    }

    public function countPrice(int $kilometers, int $minutes)
    {
        $this->totalPrice = $this->pricePerKm * $kilometers + $this->countMinutes($minutes) * $minutes;
    }

    public function countService()
    {
        // TODO: Implement countService() method.
    }

    public function addService(ServiceInterface $service)
    {

    }
}