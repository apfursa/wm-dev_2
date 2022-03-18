<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\b24\modules\wm\b24;

use yii\base\InvalidArgumentException;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\data\BaseDataProvider;
use yii\data\Sort;
use yii\db\ActiveQueryInterface;
use yii\db\Connection;
use yii\db\QueryInterface;
use yii\di\Instance;
use yii\helpers\ArrayHelper;
use Yii;

class B24DataProvider extends BaseDataProvider
{
    public $query;
    public $key;
    public $auth;

//    private $_sort;
//    private $_pagination;
    private $_keys;
    private $_models;
    private $_totalCount;


    public function getModels()
    {
        $this->prepare();

        return $this->_models;
    }

    public function prepare($forcePrepare = false)
    {
        if ($forcePrepare || $this->_models === null) {
            $this->_models = $this->prepareModels();
        }
        if ($forcePrepare || $this->_keys === null) {
            $this->_keys = $this->prepareKeys($this->_models);
        }
    }

    protected function prepareModels()
    {
//        Yii::warning('prepareModels', 'prepareModels');

//        if (!$this->query instanceof QueryInterface) {
//            throw new InvalidConfigException('The "query" property must be an instance of a class that implements the QueryInterface e.g. yii\db\Query or its subclasses.');
//        }
        $query = clone $this->query;
        //Yii::warning($query, 'dp');
        if (($pagination = $this->getPagination()) !== false) {
//            $pagination->totalCount = $this->getTotalCount();
//            if ($pagination->totalCount === 0) {
//                Yii::warning($pagination->totalCount, '$pagination->totalCount');
//                return [];
//            }
            $query->limit($pagination->getLimit())->offset($pagination->getOffset());
        }
        Yii::warning(ArrayHelper::toArray($this->getSort()), '$this->getSort()');
        if (($sort = $this->getSort()) !== false) {
            Yii::warning($sort->getOrders(),'$sort->getOrders()');
            $query->addOrderBy($sort->getOrders());
        }
//
        return $query->all($this->auth);
        //return [];
    }

    protected function prepareKeys($models)
    {
        if ($this->key !== null) {
            $keys = [];
            foreach ($models as $model) {
                if (is_string($this->key)) {
                    $keys[] = $model[$this->key];
                } else {
                    $keys[] = call_user_func($this->key, $model);
                }
            }

            return $keys;
        }

        return array_keys($models);
    }

    public function setSort($value)
    {
        parent::setSort($value);
        //TODO исправить
        if (/*$this->query instanceof ActiveQueryInterface && */($sort = $this->getSort()) !== false) {
            Yii::warning(ArrayHelper::toArray($sort), 102);
            /* @var $modelClass Model */
            $modelClass = $this->query->modelClass;
            $model = $modelClass::instance();
            if (empty($sort->attributes)) {
                foreach ($model->attributes() as $attribute) {
//                    Yii::warning($model->attributes(),'$model->attributes()');
//                    Yii::warning($attribute,'$attribute109');
                    $sort->attributes[$attribute] = [
                        'asc' => [$attribute => SORT_ASC],
                        'desc' => [$attribute => SORT_DESC],
                        'label' => $model->getAttributeLabel($attribute),
                    ];
                    // $sort->attributes['id']=[
                    //'asc' => ['id' => 4],
                    //]
                }
            } else {
                foreach ($sort->attributes as $attribute => $config) {
                    if (!isset($config['label'])) {
                        $sort->attributes[$attribute]['label'] = $model->getAttributeLabel($attribute);
                    }
                }
            }
        }
    }

    protected function prepareTotalCount()
    {
//        if (!$this->query instanceof QueryInterface) {
//            throw new InvalidConfigException('The "query" property must be an instance of a class that implements the QueryInterface e.g. yii\db\Query or its subclasses.');
//        }
//        $query = clone $this->query;
//        return (int) $query->limit(-1)->offset(-1)->orderBy([])->count('*', $this->db);
        return 44;
    }
}