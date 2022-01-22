<?php
namespace Kav\Carsharing\Service;

class ServiceDriver implements ServiceInterface
{
    const PRICE = 100;

    public function countPrice()
    {
        return self::PRICE;
    }
}