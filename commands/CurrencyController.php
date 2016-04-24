<?php
namespace app\commands;

use yii\console\Controller;
use app\models\Currency;
use app\models\CurrencyType;
use app\components\providers\Cbr;
use Yii;

class CurrencyController extends Controller
{

    public function actionIndex()
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
                $model  = new Currency();
                $model->price = $currencyList[$value['name']];
                $model->date_at = $date->format("Y-m-d");
                $model->currency_type_id = $value['id'];
                $model->save();
            }
        }

        return $model;

    }


     protected function getConfig($key)
     {
         return Yii::$app->params['providers']['cbr'][$key];
     }
}
