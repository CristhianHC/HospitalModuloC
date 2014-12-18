<?php

Yii::import('application.models._base.BaseEnfermedadActualRevisionSistemasF08');

class EnfermedadActualRevisionSistemasF08 extends BaseEnfermedadActualRevisionSistemasF08
{
    /**
     * @return EnfermedadActualRevisionSistemasF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'EnfermedadActualRevisionSistemasF08|EnfermedadActualRevisionSistemasF08s', $n);
    }

}