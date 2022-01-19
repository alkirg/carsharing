<?php
namespace Kav\Carsharing;

interface ServiceInterface
{
    public function getGpsPrice(int $minutes);
    public function getDriverPrice();
}