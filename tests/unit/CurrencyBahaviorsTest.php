<?php
use tests\_data\Orders;
use app\components\behaviors\Currency;
use app\components\currency\Eur;
use app\components\currency\Usd;

class CurrencyBahaviorsTest extends \yii\codeception\TestCase
{
    public $appConfig = '@tests/unit/_config.php';

    public function testSave()
    {
        $currency = new Eur();
        $priceEur = $currency->getCurrent('2016-03-09');

        $currency = new Usd();
        $priceUsd = $currency->getCurrent('2016-03-09');

        $orders = new Orders();
        $orders->attachBehavior('BehaviorsSave', [
            'class' => app\components\behaviors\Currency::className(),
            'from' => $priceEur,
            'to' => $priceUsd,
            'fieldName' => 'price'
        ]);
        $orders->date_at = date('Y-m-d');
        $save =$orders->save();

        if (!empty($errors = $orders->errors)) {
            print_r($errors);
            die();
        }

        $this->assertTrue($save);
    }

}