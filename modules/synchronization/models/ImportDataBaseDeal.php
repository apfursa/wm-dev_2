<?php

namespace app\modules\synchronization\models;

use Yii;
use wm\b24tools\b24Tools;
use yii\helpers\ArrayHelper;
use wm\admin\models\Settings;
use yii\db\Exception;
use wm\yii\db\ActiveRecord;
use app\modules\synchronization\models\Deal;

class ImportDataBaseDeal extends ActiveRecord {

    public static $modelClass = Deal::class;
    public static $crm = 'crm.deal.list';
    public static $isImportError = 'isImportError';

    public static function importData() {
        $maxCountQuery = Settings::getParametrByName('maxCountQuery');
        $isSync = Settings::getParametrByName(self::$isImportError);
        $start = 0;
        $isSyncImport = false;
        while (!$isSyncImport && $maxCountQuery >= 2 && $isSync) {
            $isSyncImport = self::import($maxCountQuery, $start);
        }
    }

    public static function import(&$maxCountQuery, &$start) {
        $resultB24 = self::getB24List($start);
        $maxCountQuery--;
        $arrayId = self::getArrayId($resultB24);
        if ($arrayId) {
            foreach ($resultB24 as $oneEntity) {
                $model = self::findModel($oneEntity['ID']);
                $convertedFieldsOneEntity = self::convertFieldsOneEntity($oneEntity);
                $model->load($convertedFieldsOneEntity);
                $model->save();
                if ($model->errors) {
                    Yii::error($model->errors, '$model ImportDataBase import save');
                    Yii::error($arrayId, '$arrayIdImportDataBase');
                    $setingsSyncModel = Settings::find()->where(['name_id' => self::$isImportError])->one();
                    $setingsSyncModel->value = 0;
                    $setingsSyncModel->save();
                    throw new Exception('Ошибка добавления записи в БД при импортировании  данных.');
                }
            }
            $start += 50;
        }
        return count($arrayId) < 50 ? true : false;
    }

    public static function getArrayId($eventsB24) {
        $arrayId = [];
        foreach ($eventsB24 as $value) {
            $arrayId[] = ArrayHelper::getValue($value, 'ID');
        }
        return $arrayId;
    }

    public static function getB24List(&$start) {
        $component = new b24Tools();
        $b24App = $component->connectFromAdmin();
        $obB24 = new \Bitrix24\B24Object($b24App);
        $answerB24 = $obB24->client->call(
                        self::$crm,
                        [
                            'select' => [ "UF_*", "*" ],
                            'start' => $start,
                        ]
                )['result'];
        return $answerB24;
    }

    public static function convertFieldsOneEntity($oneEntity) {
        $convertedFieldsOneEntity = [];
        foreach ($oneEntity as $key => $value) {
            $a = \yii\helpers\Inflector::variablize(strtolower($key));
            $convertedFieldsOneEntity[$a] = $value;
        }
        return $convertedFieldsOneEntity;
    }

    public static function findModel($id) {
        if ($model = self::$modelClass::find()->where(['id' => $id])->one()) {
            return $model;
        } else {
            $model = new self::$modelClass;
            return $model;
        }
    }

}
