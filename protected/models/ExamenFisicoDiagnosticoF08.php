<?php

Yii::import('application.models._base.BaseExamenFisicoDiagnosticoF08');

class ExamenFisicoDiagnosticoF08 extends BaseExamenFisicoDiagnosticoF08
{
    /**
     * @return ExamenFisicoDiagnosticoF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'ExamenFisicoDiagnosticoF08|ExamenFisicoDiagnosticoF08s', $n);
    }

}