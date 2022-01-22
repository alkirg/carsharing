<?php
namespace Kav\Carsharing\Service;

class Service implements ServiceInterface
{
    const DRIVER_PRICE = 100;
    const GPS_PRICE = 15;
    const ERR_NEGATIVE = 'Введите число больше 0';

    private int $minutes;
    private bool $driver;

    public function __construct(int $minutes, bool $driver)
    {
        $this->minutes = $minutes;
        $this->driver = $driver;
    }

    public function countPrice()
    {
        return self::GPS_PRICE * ceil($this->minutes / 60) + ($this->driver ? self::DRIVER_PRICE : 0);
    }
}