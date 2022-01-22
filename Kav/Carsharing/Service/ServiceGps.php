<?php
namespace Kav\Carsharing\Service;

class ServiceGps implements ServiceInterface
{
    private float $price = 15;
    const ERR_NEGATIVE = 'Введите число больше 0';

    private int $minutes;
    private bool $driver;

    public function __construct(int $minutes)
    {
        if ($minutes <= 0) {
            trigger_error(self::ERR_NEGATIVE, E_USER_ERROR);
            return false;
        }
        $this->minutes = $minutes;
    }

    public function countPrice()
    {
        return $this->price * ceil($this->minutes / 60);
    }
}