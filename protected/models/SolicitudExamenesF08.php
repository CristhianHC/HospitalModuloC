<?php

Yii::import('application.models._base.BaseSolicitudExamenesF08');

class SolicitudExamenesF08 extends BaseSolicitudExamenesF08
{
    /**
     * @return SolicitudExamenesF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'SolicitudExamenesF08|SolicitudExamenesF08s', $n);
    }

}