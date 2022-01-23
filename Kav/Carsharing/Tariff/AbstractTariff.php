<?php
namespace Kav\Carsharing\Tariff;
use Kav\Carsharing\Service\ServiceInterface;

abstract class AbstractTariff implements TariffInterface
{
    const ERR_NEGATIVE = 'Введите число больше 0';
    const ERR_SERVICE = 'Услуга уже существует';

    protected int $kilometers;
    protected int $minutes;
    private array $services;

    public function __construct(int $kilometers, int $minutes)
    {
        if ($kilometers <= 0 || $minutes <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        $this->kilometers = $kilometers;
        $this->minutes = $minutes;
        $this->services = [];
    }

    public function countPrice()
    {
        return $this->countKmPrice() + $this->countMinutePrice();
    }

    abstract protected function countKmPrice();
    abstract protected function countMinutePrice();

    public function addService(ServiceInterface $service)
    {
        if (isset($this->services[get_class($service)])) {
            trigger_error(self::ERR_SERVICE);
        } else {
            $this->services[get_class($service)] = $service;
        }

        return $service->countPrice();
    }

    public function getServices()
    {
        return $this->services;
    }
}