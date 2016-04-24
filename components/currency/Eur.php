<?php
namespace app\components\currency;

class Eur extends Currency implements CurrencyInterface
{
    const CURRENCY = 'EUR';

    public function getCurrent($date = null)
    {
        return $this->getCourse(self::CURRENCY, $date);
    }
}