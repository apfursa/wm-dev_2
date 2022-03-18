<?php

namespace app\models;
use wm\yii\db\ActiveRecord;

class Company extends ActiveRecord
{
    public static function tableName()
    {
        return 'company';
    }

    public function rules()
    {
//        $component = new b24Tools();
//        $b24App = $component->connectFromAdmin();
//        $obB24 = new B24Object($b24App);
//        $answerB24 = $obB24->client->call(
//            'crm.company.fields',
//            )['result'];
//        $arrData = ArrayHelper::toArray($answerB24);
//        $entityFields = array_keys($arrData);
        //return $entityFields;
        return [
            [[
                'ID',
                'TITLE',

               // $entityFields

//            'id',
//            'title',
//            'companyType',
//            'logo',
//            'address',
//            'address2',
//            'addressCity',
//            'addressPostalCode',
//            'addressRegion',
//            'addressProvince',
//            'addressCountry',
//            'addressCountryCode',
//            'addressLocAddrId',
//            'addressLegal',
//            'regAddress',
//            'regAddress2',
//            'regAddressCity',
//            'regAddressPostalCode',
//            'regAddressRegion',
//            'regAddressProvince',
//            'regAddressCountry',
//            'regAddressCountryCode',
//            'regAddressLocAddrId',
//            'bankingDetails',
//            'industry',
//            'employees',
//            'currencyId',
//            'revenue',
//            'opened',
//            'comments',
//            'hasPhone',
//            'hasEmail',
//            'hasImol',
//            'isMyCompany',
//            'assignedById',
//            'createdById',
//            'modifyById',
//            'dateCreate',
//            'dateModify',
//            'contactId',
//            'leadId',
//            'originatorId',
//            'originId',
//            'originVersion',
//            'utmSource',
//            'utmMedium',
//            'utmCampaign',
//            'utmContent',
//            'utmTerm',
//            'phone',
//            'email',
//            'web',
//            'im'
            ], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '',
            'title' => '',
            'companyType' => '',
            'logo' => '',
            'address' => '',
            'address2' => '',
            'addressCity' => '',
            'addressPostalCode' => '',
            'addressRegion' => '',
            'addressProvince' => '',
            'addressCountry' => '',
            'addressCountryCode' => '',
            'addressLocAddrId' => '',
            'addressLegal' => '',
            'regAddress' => '',
            'regAddress2' => '',
            'regAddressCity' => '',
            'regAddressPostalCode' => '',
            'regAddressRegion' => '',
            'regAddressProvince' => '',
            'regAddressCountry' => '',
            'regAddressCountryCode' => '',
            'regAddressLocAddrId' => '',
            'bankingDetails' => '',
            'industry' => '',
            'employees' => '',
            'currencyId' => '',
            'revenue' => '',
            'opened' => '',
            'comments' => '',
            'hasPhone' => '',
            'hasEmail' => '',
            'hasImol' => '',
            'isMyCompany' => '',
            'assignedById' => '',
            'createdById' => '',
            'modifyById' => '',
            'dateCreate' => '',
            'dateModify' => '',
            'contactId' => '',
            'leadId' => '',
            'originatorId' => '',
            'originId' => '',
            'originVersion' => '',
            'utmSource' => '',
            'utmMedium' => '',
            'utmCampaign' => '',
            'utmContent' => '',
            'utmTerm' => '',
            'phone' => '',
            'email' => '',
            'web' => '',
            'im' => ''
        ];
    }
}
