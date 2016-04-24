<?php
use app\components\currency\Eur;
use app\components\currency\Usd;

class CurrencyTest extends \yii\codeception\TestCase
{
    public $appConfig = '@tests/unit/_config.php';

    public function testGetCurrencyEurTest()
    {
        $currency = new Eur();
        $price = $currency->getCurrent('2016-03-09');

        $this->assertEquals('80.1161', $price);
    }

    public function testGetCurrencyUsdTest()
    {
        $currency = new Usd();
        $price = $currency->getCurrent('2016-03-09');

        $this->assertEquals('73.1854', $price);
    }



    protected function getConfig($key)
    {
        return Yii::$app->params['providers']['cbr'][$key];
    }
}