<?php
namespace Kav\Carsharing;

abstract class AbstractTariff implements TariffInterface
{
    const ERR_SERVICE = 'Невозможно добавить услугу';
    const ERR_NEGATIVE = 'Введите число больше 0';

    private float $pricePerKm;
    private int $kilometers;
    private int $minutes;

    public function __construct($pricePerKm)
    {
        $this->pricePerKm = $pricePerKm;
    }

    public function countPrice(int $kilometers, int $minutes)
    {
        if ($kilometers <= 0 || $minutes <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        $this->kilometers = $kilometers;
        $this->minutes = $minutes;
        return $this->countKmPrice($kilometers) + $this->countMinutePrice($minutes);
    }

    protected function countKmPrice(int $kilometers)
    {
        return $this->pricePerKm * $kilometers;
    }

    abstract protected function countMinutePrice(int $minutes);

    public function addService(ServiceInterface $service)
    {
        if (!$this->minutes) {
            trigger_error(self::ERR_SERVICE, E_USER_ERROR);
            return false;
        }
        return $service->countPrice();
    }
}