<?php
namespace Kav\Carsharing\Tariff;

abstract class AbstractTariff implements TariffInterface
{
    const ERR_NEGATIVE = 'Введите число больше 0';

    private int $kilometers;
    private int $minutes;

    public function __construct(int $kilometers, int $minutes)
    {
        if ($kilometers <= 0 || $minutes <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        $this->kilometers = $kilometers;
        $this->minutes = $minutes;
    }

    public function countPrice()
    {
        return $this->countKmPrice($this->kilometers) + $this->countMinutePrice($this->minutes);
    }

    abstract protected function countKmPrice(int $kilometers);
    abstract protected function countMinutePrice(int $minutes);

    public function addService(\Kav\Carsharing\Service\ServiceInterface $service)
    {
        return $service->countPrice();
    }
}