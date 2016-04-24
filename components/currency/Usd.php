<?php
namespace app\components\currency;

use app\components\currency\CurrencyInterface;

class Usd extends Currency implements CurrencyInterface
{
    const CURRENCY = 'USD';

    public function getCurrent($date = null)
    {
        return $this->getCourse(self::CURRENCY, $date);
    }
}