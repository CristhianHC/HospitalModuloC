<?php

Yii::import('application.models._base.BaseLocalizacionLesionesF08');

class LocalizacionLesionesF08 extends BaseLocalizacionLesionesF08
{
    /**
     * @return LocalizacionLesionesF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'LocalizacionLesionesF08|LocalizacionLesionesF08s', $n);
    }

}