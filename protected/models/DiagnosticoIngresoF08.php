<?php

Yii::import('application.models._base.BaseDiagnosticoIngresoF08');

class DiagnosticoIngresoF08 extends BaseDiagnosticoIngresoF08
{
    /**
     * @return DiagnosticoIngresoF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'DiagnosticoIngresoF08|DiagnosticoIngresoF08s', $n);
    }

}