<?php

namespace app\b24\modules\wm\b24\crm;

//use yii\base\Model;
use Bitrix24\B24Object;
use phpDocumentor\Reflection\DocBlock\Tags\Source;
use wm\b24tools\b24Tools;
use Yii;
use yii\helpers\ArrayHelper;
use app\b24\modules\wm\b24\TableSchema;
use app\b24\modules\wm\b24\ActiveRecord;


class SourceActiveRecord extends ActiveRecord
{
    public static function entityId()
    {
        return 'SOURCE';
    }

    public static function listMethod()
    {
        return 'crm.status.list';
    }

    public static function oneMethod()
    {
        return 'crm.status.get';
    }

    public static function fieldsMethod()
    {
        return 'crm.status.fields';
    }

    public function fields()
    {
        return $this->attributes();
    }

    public static function getFooter($models)
    {
        return [];
    }

    public static function find()
    {
        return Yii::createObject(SourceActiveQuery::className(), [get_called_class()]);
    }

    public static function listDataSelector()
    {
        return 'result';
    }

    public static function oneDataSelector()
    {
        return 'result';
    }

    /**
     * Возвращает все столбцы сущности, может быть переопределена для оптимизации запроса
     * @return array
     */
    public function attributes()
    {
        return array_keys(static::getTableSchema()->columns);

    }

    public static function getTableSchema()
    {
        $cache = Yii::$app->cache;
        $key = static::fieldsMethod();
        $tableSchema =  $cache->getOrSet($key, function () {
            return static::internalGetTableSchema();
        }, 300);
//        $tableSchema = new TableSchema($schemaData);
        //Yii::warning(ArrayHelper::toArray($tableSchema), '$tableSchema');
        return $tableSchema;
    }

    public static function internalGetTableSchema(){
        $b24Obj = self::getConnect();
        $schemaData =   ArrayHelper::getValue($b24Obj->client->call(
            static::fieldsMethod()), 'result');
        return new TableSchema($schemaData);
    }

}
