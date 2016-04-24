<?php
use app\components\currency\Eur;
use app\components\currency\Usd;

class CurrencyTest extends \yii\codeception\TestCase
{
    public $appConfig = '@tests/unit/_config.php';

    public function testGetCurrencyEur()
    {
        $currency = new Eur();
        $price = $currency->getCurrent('2016-03-09');

        $this->assertEquals('80.1161', $price);
    }

    public function testGetCurrencyUsd()
    {
        $currency = new Usd();
        $price = $currency->getCurrent('2016-03-09');

        $this->assertEquals('73.1854', $price);
    }
}