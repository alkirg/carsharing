<?php
namespace Kav\Carsharing;

abstract class AbstractTariff implements TariffInterface
{
    const ERR_SERVICE = 'Невозможно добавить услугу';
    const ERR_NEGATIVE = 'Введите число больше 0';

    private float $pricePerKm;
    private float $pricePerMinute;
    private int $kilometers;
    private int $minutes;

    abstract protected function countMinutes(int $minutes);

    public function __construct($pricePerKm, $pricePerMinute)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMinute = $pricePerMinute;
    }

//    public function getPricePerKm()
//    {
//        return $this->pricePerKm;
//    }
//
//    public function setPricePerKm($price)
//    {
//        $this->pricePerKm = $price;
//    }
//
//    public function getPricePerMinute()
//    {
//        return $this->pricePerMinute;
//    }
//
//    public function setPricePerMinute($price)
//    {
//        $this->pricePerMinute = $price;
//    }

    public function countPrice(int $kilometers, int $minutes)
    {
        if ($kilometers <= 0 || $minutes <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        $this->kilometers = $kilometers;
        $this->minutes = $minutes;
        return $this->pricePerKm * $kilometers + $this->pricePerMinute * $this->countMinutes($minutes);
    }

    public function addService(ServiceInterface $service)
    {
        if (!$this->minutes) {
            trigger_error(self::ERR_SERVICE, E_USER_ERROR);
            return false;
        }
        return $service->countPrice();
    }
}