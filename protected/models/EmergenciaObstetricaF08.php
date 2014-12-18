<?php

Yii::import('application.models._base.BaseEmergenciaObstetricaF08');

class EmergenciaObstetricaF08 extends BaseEmergenciaObstetricaF08
{
    /**
     * @return EmergenciaObstetricaF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'EmergenciaObstetricaF08|EmergenciaObstetricaF08s', $n);
    }

}