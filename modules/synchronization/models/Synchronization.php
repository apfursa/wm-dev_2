<?php


namespace app\modules\synchronization\models;

use yii\base\Model;

class Synchronization extends Model
{
    public static function synchronization()
    {
        $arr = [
            [
                'classSql' => '\app\models\Deal',
                'classB24' => '\app\b24\models\B24Deal',
                'class' => 'app\modules\synchronization\models\SynchronizationDeal',
                'method' => 'synchronization',
            ],
            [
                'classSql' => '\app\models\Company',
                'classB24' => '\app\b24\models\B24Company',
                'class' => 'app\modules\synchronization\models\SynchronizationCompany',
                'method' => 'synchronization',
            ],
            [
                'classSql' => 'app\models\Contact',
                'classB24' => 'app\b24\models\B24Contact',
                'class' => 'app\modules\synchronization\models\SynchronizationContact',
                'method' => 'synchronization',
            ],
        ];

        foreach ($arr as $item) {
            call_user_func([$item['class'], $item['method']], $item['classB24'], $item['classSql']);
        }
    }
}