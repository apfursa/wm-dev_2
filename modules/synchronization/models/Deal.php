<?php

namespace app\modules\synchronization\models;

use Yii;
use wm\admin\models\settings\events\Events;
use wm\b24tools\b24Tools;
use yii\helpers\ArrayHelper;
use wm\admin\models\Settings;
use yii\db\Exception;

class Deal extends \wm\yii\db\ActiveRecord {

    public static $modelClass = Deal::class;
    public static $onCrmAdd = 'onCrmDealAdd';
    public static $onCrmUpdate = 'onCrmDealUpdate';
    public static $onCrmDelete = 'onCrmDealDelete';
    public static $crmList = 'crm.deal.list';
    public static $isSyncError = 'isDealSyncError';

    public static function tableName() {
        return 'deal';
    }

    public function rules() {
        return [
            [[
            "id",
            "title",
            "typeId",
            "categoryId",
            "stageId",
            "stageSemanticId",
            "isNew",
            "isRecurring",
            "isReturnCustomer",
            "isRepeatedApproach",
            "probability",
            "currencyId",
            "opportunity",
            "isManualOpportunity",
            "taxValue",
            "companyId",
            "contactId",
            "contactIds",
            "quoteId",
            "begindate",
            "closedate",
            "opened",
            "closed",
            "comments",
            "assignedById",
            "createdById",
            "modifyById",
            "dateCreate",
            "dateModify",
            "sourceId",
            "sourceDescription",
            "leadId",
            "additionalInfo",
            "locationId",
            "originatorId",
            "originId",
            "utmSource",
            "utmMedium",
            "utmCampaign",
            "utmContent",
            "utmTerm",
            "ufCrm6177f02f5c450",
            "ufCrm6177f02f7c790",
            "ufCrm6177f02f94b90",
            "ufCrm6177f02fa390a",
            "ufCrm6177f02fb0391",
            "ufCrm6177f02fbfbc9",
            "ufCrm6177f02fd0125",
            "ufCrm6177f02fde542",
            "ufCrm6177f02fe80f0",
            "ufCrm6177f02ff17dd",
            "ufCrm1635255301",
            "ufCrm1635255315",
            "ufCrm1635255327",
            "ufCrm1635255343",
            "ufCrm1635255371",
            "ufCrm1635255423",
            "ufCrm1635255923",
            "ufCrm1635255941",
            "ufCrm1635255949",
            "ufCrm1635255972",
            "ufCrm1635255980",
            "ufCrm1635256016",
            "ufCrm1635256052",
            "ufCrm1635256059",
            "ufCrm1635256083",
            "ufCrm1635256105",
            "ufCrm1635256119",
            "ufCrm1635256128",
            "ufCrm1635256140",
            "ufCrm1635256151",
            "ufCrm1635256168",
            "ufCrm1635256184",
            "ufCrm1635256200",
            "ufCrm1635265352963",
            "ufCrm1635265363996",
            "ufCrm1635265751202",
            "ufCrm1635266158803",
            "ufCrm1635266300363",
            "ufCrm1635266307877",
            "ufCrm1635266321981",
            "ufCrm1635266374905",
            "ufCrm1635266435599",
            "ufCrm1635267019343",
            "ufCrm1635267046708",
            "ufCrm1635267061983",
            "ufCrm1635267628209",
            "ufCrm1635267642681",
            "ufCrm1635267655593",
            "ufCrm1635267673395",
            "ufCrm1635267687338",
            "ufCrm1635267699494",
            "ufCrm1635267711114",
            "ufCrm1637088319",
            "ufCrm61940265c5b76",
            "ufCrm1637090369",
            "ufCrm1637168638",
            "ufCrmAWGroupId",
            "ufCrmATGroupId"
                ], 'safe'],
        ];
    }

    public function attributeLabels() {
        return [
            "id" => '',
            "title" => '',
            "typeId" => '',
            "categoryId" => '',
            "stageId" => '',
            "stageSemanticId" => '',
            "isNew" => '',
            "isRecurring" => '',
            "isReturnCustomer" => '',
            "isRepeatedApproach" => '',
            "probability" => '',
            "currencyId" => '',
            "opportunity" => '',
            "isManualOpportunity" => '',
            "taxValue" => '',
            "companyId" => '',
            "contactId" => '',
            "contactIds" => '',
            "quoteId" => '',
            "begindate" => '',
            "closedate" => '',
            "opened" => '',
            "closed" => '',
            "comments" => '',
            "assignedById" => '',
            "createdById" => '',
            "modifyById" => '',
            "dateCreate" => '',
            "dateModify" => '',
            "sourceId" => '',
            "sourceDescription" => '',
            "leadId" => '',
            "additionalInfo" => '',
            "locationId" => '',
            "originatorId" => '',
            "originId" => '',
            "utmSource" => '',
            "utmMedium" => '',
            "utmCampaign" => '',
            "utmContent" => '',
            "utmTerm" => '',
            "ufCrm6177f02f5c450" => '',
            "ufCrm6177f02f7c790" => '',
            "ufCrm6177f02f94b90" => '',
            "ufCrm6177f02fa390a" => '',
            "ufCrm6177f02fb0391" => '',
            "ufCrm6177f02fbfbc9" => '',
            "ufCrm6177f02fd0125" => '',
            "ufCrm6177f02fde542" => '',
            "ufCrm6177f02fe80f0" => '',
            "ufCrm6177f02ff17dd" => '',
            "ufCrm1635255301" => '',
            "ufCrm1635255315" => '',
            "ufCrm1635255327" => '',
            "ufCrm1635255343" => '',
            "ufCrm1635255371" => '',
            "ufCrm1635255423" => '',
            "ufCrm1635255923" => '',
            "ufCrm1635255941" => '',
            "ufCrm1635255949" => '',
            "ufCrm1635255972" => '',
            "ufCrm1635255980" => '',
            "ufCrm1635256016" => '',
            "ufCrm1635256052" => '',
            "ufCrm1635256059" => '',
            "ufCrm1635256083" => '',
            "ufCrm1635256105" => '',
            "ufCrm1635256119" => '',
            "ufCrm1635256128" => '',
            "ufCrm1635256140" => '',
            "ufCrm1635256151" => '',
            "ufCrm1635256168" => '',
            "ufCrm1635256184" => '',
            "ufCrm1635256200" => '',
            "ufCrm1635265352963" => '',
            "ufCrm1635265363996" => '',
            "ufCrm1635265751202" => '',
            "ufCrm1635266158803" => '',
            "ufCrm1635266300363" => '',
            "ufCrm1635266307877" => '',
            "ufCrm1635266321981" => '',
            "ufCrm1635266374905" => '',
            "ufCrm1635266435599" => '',
            "ufCrm1635267019343" => '',
            "ufCrm1635267046708" => '',
            "ufCrm1635267061983" => '',
            "ufCrm1635267628209" => '',
            "ufCrm1635267642681" => '',
            "ufCrm1635267655593" => '',
            "ufCrm1635267673395" => '',
            "ufCrm1635267687338" => '',
            "ufCrm1635267699494" => '',
            "ufCrm1635267711114" => '',
            "ufCrm1637088319" => '',
            "ufCrm61940265c5b76" => '',
            "ufCrm1637090369" => '',
            "ufCrm1637168638" => '',
            "ufCrmAWGroupId" => '',
            "ufCrmATGroupId" => '',
        ];
    }

    public static function synchronization() {
        $maxCountQuerySync = Settings::getParametrByName('maxCountQuerySync');
        $isSync = Settings::getParametrByName(self::$isSyncError);

        $isSyncAdd = false;
        while (!$isSyncAdd && $maxCountQuerySync >= 2 && $isSync) {
            $isSyncAdd = self::synchronAdd($maxCountQuerySync);
        }

        $isSyncUpdate = false;
        while (!$isSyncUpdate && $maxCountQuerySync >= 2 && $isSync) {
            $isSyncUpdate = self::synchronUpdate($maxCountQuerySync);
        }

        $isSyncDelete = false;
        while (!$isSyncDelete && $maxCountQuerySync >= 2 && $isSync) {
            $isSyncDelete = self::synchronDelete($maxCountQuerySync);
        }
    }

    public static function synchronAdd(&$maxCountQuerySync) {
        $answerB24 = Events::getOffline(self::$onCrmAdd);
        $maxCountQuerySync--;
        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
        $arrayId = self::getArrayId($eventsB24);
        if ($arrayId) {
            $B24List = self::getB24List($arrayId, self::$crmList);
            $maxCountQuerySync--;
            foreach ($B24List as $oneEntity) {
                $model = self::findModel($oneEntity['ID']);
                $convertedFieldsOneEntity = self::convertFieldsOneEntity($oneEntity);
                $model->load($convertedFieldsOneEntity);
                $model->save();
                if ($model->errors) {
                    Yii::error($model->errors, '$model Deal add Save');
                    Yii::error($arrayId, '$arrayIdOnCrmDealAdd');
                    $setingsSyncModel = Settings::find()->where(['name_id' => self::$isSyncError])->one();
                    $setingsSyncModel->value = 0;
                    $setingsSyncModel->save();
                    throw new Exception('Ошибка добавления записи в БД при синхронизации.');
                }
            }
        }
        return count($arrayId) < 50 ? true : false;
    }

    public static function synchronUpdate(&$maxCountQuerySync) {
        $answerB24 = Events::getOffline(self::$onCrmUpdate);
        $maxCountQuerySync--;
        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
        $arrayId = self::getArrayId($eventsB24);
        if ($arrayId) {
            $B24List = self::getB24List($arrayId, self::$crmList);
            $maxCountQuerySync--;
            foreach ($B24List as $oneEntity) {
                $model = self::findModel($oneEntity['ID']);
                $convertedFieldsOneEntity = self::convertFieldsOneEntity($oneEntity);
                $model->load($convertedFieldsOneEntity);
                $model->save();
                if ($model->errors) {
                    Yii::error($model->errors, '$model Deal update Save');
                    Yii::error($arrayId, '$arrayIdOnCrmDealUpdate');
                    $setingsSyncModel = Settings::find()->where(['name_id' => self::$isSyncError])->one();
                    $setingsSyncModel->value = 0;
                    $setingsSyncModel->save();
                    throw new Exception('Ошибка изменения записи в БД при синхронизации.');
                }
            }
        }
        return count($arrayId) < 50 ? true : false;
    }

    public static function synchronDelete(&$maxCountQuerySync) {
        $answerB24 = Events::getOffline(self::$onCrmDelete);
        $maxCountQuerySync--;
        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
        $arrayId = self::getArrayId($eventsB24);
        if ($arrayId) {
            foreach ($arrayId as $id) {
                $model = self::find()->where(['id' => $id])->one();
                if ($model) {
                    $model->delete();
                }
            }
        }
        return count($arrayId) < 50 ? true : false;
    }

    public static function getArrayId($eventsB24) {
        $arrayId = [];
        foreach ($eventsB24 as $value) {
            $arrayId[] = ArrayHelper::getValue($value, 'EVENT_DATA.FIELDS.ID');
        }
        return $arrayId;
    }

    public static function getB24List($arrayId, $crm) {
        $component = new b24Tools();
        $b24App = $component->connectFromAdmin();
        $obB24 = new \Bitrix24\B24Object($b24App);
        $answerB24 = $obB24->client->call(
                        $crm,
                        [
                            'filter' => ["ID" => $arrayId],
                            'select' => ["UF_*","*"],
                        ],
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
        if ($model = self::find()->where(['id' => $id])->one()) {
            return $model;
        } else {
            $model = new self::$modelClass;
            return $model;
        }
    }

}
