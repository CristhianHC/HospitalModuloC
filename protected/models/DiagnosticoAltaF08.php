<?php

Yii::import('application.models._base.BaseDiagnosticoAltaF08');

class DiagnosticoAltaF08 extends BaseDiagnosticoAltaF08
{
    /**
     * @return DiagnosticoAltaF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'DiagnosticoAltaF08|DiagnosticoAltaF08s', $n);
    }

}