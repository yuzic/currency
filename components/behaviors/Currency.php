<?php
namespace app\components\behaviors;
use yii\db\ActiveRecord;
use yii\base\Behavior;
use Yii;

class Currency extends Behavior
{
    /**
     * @var source currency null
     */
    public $from = null;

    /**
     * @var sitination currency null
     */
    public $to = null;

    public $fieldName = 'price';

    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_VALIDATE => 'beforeInsert',
        ];
    }


    public function beforeInsert($event)
    {
        if ($this->fieldName !== null) {
            $balance = $this->from / $this->to;
            $this->owner->price= $balance;
            $event->isValid = true;
            return true;
        }
        $this->owner->addError('save error', Yii::t('Site', 'Unable to save model'));
        $event->isValid = false;
        return false;
    }
}