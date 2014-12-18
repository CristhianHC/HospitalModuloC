<?php

Yii::import('application.models._base.BaseAltaF08');

class AltaF08 extends BaseAltaF08
{
    /**
     * @return AltaF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'AltaF08|AltaF08s', $n);
    }

}