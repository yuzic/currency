<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property integer $id
 * @property string $price
 * @property string $date_at
 * @property integer $currency_type_id
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'currency_type_id'], 'required'],
            [['price'], 'number'],
            [['date_at'], 'safe'],
            [['currency_type_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'date_at' => 'Date At',
            'currency_type_id' => 'Currency Type ID',
        ];
    }
}
