<?php

namespace tests\_data;
use app\components\behaviors\Currency;
use Yii;
/**
 * This is the model class for table "Orders".
 *
 * @property integer $id
 * @property string $price
 * @property string $date_at
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'required'],
            [['price'], 'number'],
            [['date_at'], 'safe'],
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
        ];
    }
}
