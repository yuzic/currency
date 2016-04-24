<?php
namespace app\components\currency;

interface CurrencyInterface
{
    /**
     * for get current currency
     * @return mixed
     */
    public function getCurrent();
}
