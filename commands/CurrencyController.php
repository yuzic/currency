<?php
namespace app\commands;

use yii\console\Controller;
use app\models\Currency;
use app\models\CurrencyType;
use app\components\providers\Cbr;
use yii\helpers\Console;
use Yii;

class CurrencyController extends Controller
{

    /**
     * Get currency within 45 days
     * @return Currency
     */
    public function actionIndex()
    {
        $currency = Currency::find()
            ->asArray()
            ->all();

        // if not date then fill their
        if (empty($currency)) {
            $this->getForPeriod();
        }

        $currentDate= date('Y-m-d');

        $typeList = CurrencyType::find()
            ->asArray()
            ->all();

        $currency = Currency::findAll(['date_at' => $currentDate]);
        // insert cource for current day
        if (empty($currency)) {
            $provider = new Cbr($this->getConfig('url'));
            $currencyList = $provider->getCurrency(date("d.m.Y"));
            foreach ($typeList as  $value) {
                $price = $currencyList[$value['name']];
                $this->saveData($price, $currentDate, $value['id']);
            }

            Console::output("Ok Currency insert  for current day");
        }


    }

    private function getForPeriod()
    {
        $provider = new Cbr($this->getConfig('url'));
        $dayCount = $this->getConfig('day_count');
        $time = strtotime("-{$dayCount} days", time());
        $date = date("Y-m-d", $time);

        $begin = new \DateTime($date);
        $end = new \DateTime($date);
        $end = $end->modify("+{$dayCount} day");

        $interval = new \DateInterval('P1D');
        $daterange = new \DatePeriod($begin, $interval ,$end);

        $typeList = CurrencyType::find()
            ->asArray()
            ->all();


        foreach($daterange as $date){
            $dt = $date->format("d.m.Y");
            $currencyList = $provider->getCurrency($dt);
            foreach ($typeList as  $value) {
                $price = $currencyList[$value['name']];
                $this->saveData($price, $date->format("Y-m-d"), $value['id']);
            }
        }

        Console::output("Ok Currency insert  for period");
    }

    private function saveData($price, $date, $typeId)
    {
        $model  = new Currency();
        $model->price = $price;
        $model->date_at = $date;
        $model->currency_type_id = $typeId;

        return $model->save();
    }

     protected function getConfig($key)
     {
         return Yii::$app->params['providers']['cbr'][$key];
     }
}
