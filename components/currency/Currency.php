<?php
namespace app\components\currency;
use app\models\Currency as CurrencyModel;
use app\models\CurrencyType;

class Currency
{
    /**
     * Get cource from database
     *
     * @param null $courseConst
     * @param null $dt
     * @return float
     */
    protected function getCourse($courseConst = null, $dt = null)
    {
        $dt = ($dt !== null) ? $dt: date('Y-m-d');

        $currencyType  = CurrencyType::findOne(['name' => $courseConst]);

        $currency = CurrencyModel::findOne([
            'date_at' => $dt,
            'currency_type_id' => $currencyType->id
        ]);

        return $currency->price;

    }
}