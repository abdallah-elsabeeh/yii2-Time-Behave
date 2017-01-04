<?php

namespace common\models\traitsHelpers;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Description of timeBehaviors 
 * this class decide how the time stamp behaves
 *
 * @author abdallah
 */
trait timeBehaviors
{

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value' => function() {
                    return date('U');
                },
            ],
        ];
    }
}
