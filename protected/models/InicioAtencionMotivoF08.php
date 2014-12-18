<?php

Yii::import('application.models._base.BaseInicioAtencionMotivoF08');

class InicioAtencionMotivoF08 extends BaseInicioAtencionMotivoF08
{
    /**
     * @return InicioAtencionMotivoF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'InicioAtencionMotivoF08|InicioAtencionMotivoF08s', $n);
    }

}