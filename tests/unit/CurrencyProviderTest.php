<?php
use app\components\providers\Cbr;

class CurrencyProviderTest extends \yii\codeception\TestCase
{
    public $appConfig = '@tests/unit/_config.php';

    public function testGetDataFromProvider()
    {
        $provider = new Cbr($this->getConfig('url'));
        $dt = date("d.m.Y");
        $list = $provider->getCurrency($dt);

        $this->assertArrayHasKey('USD', $list);
    }


    protected function getConfig($key)
    {
        return Yii::$app->params['providers']['cbr'][$key];
    }
}