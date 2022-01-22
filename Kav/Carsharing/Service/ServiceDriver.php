<?php
namespace Kav\Carsharing\Service;

class ServiceDriver implements ServiceInterface
{
    private float $price = 100;

    public function countPrice()
    {
        return $this->price;
    }
}