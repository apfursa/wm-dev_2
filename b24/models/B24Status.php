<?php

namespace app\b24\models;

use app\b24\modules\wm\b24\crm\CrmCategoryActiveRecord;
use app\b24\modules\wm\b24\crm\CrmStatusActiveRecord;

class B24Status extends CrmStatusActiveRecord
{

//    public static function entityTypeId()
//    {
//        return 174;
//    }

    //переделать
//    public function rules()
//    {
//
//        return [
//            // атрибут required указывает, что name, email, subject, body обязательны для заполнения
//            [[
//                "id",
//                "title",
//                "opened",
//            ], 'safe'],
//        ];
//    }

    /**
     * @return array
     */
//    public function attributeLabels()
//    {
//        return [
//            "id" => '',
//            "title" => '',
//            "opened" => '',
//        ];
//    }

//    public function fields()
//    {
//        return [
//            'id' => 'ID',
//            'title' => 'NAME',
//            //'opened',
//            //'test' => 'title'
//        ];
//    }

    /**
     * Переопределяет столбцы которые нужно выбирать из битрикс24 для оптинизации запроса
     * @return array
     */
//    public function attributes()
//    {
//        return [
//            'id',
//            'title',
//            'opened'
//        ];
//    }
}
