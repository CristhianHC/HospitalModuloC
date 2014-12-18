<?php

Yii::import('application.models._base.BaseAntecedentesPersonalesFamiliaresF08');

class AntecedentesPersonalesFamiliaresF08 extends BaseAntecedentesPersonalesFamiliaresF08
{
    /**
     * @return AntecedentesPersonalesFamiliaresF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'AntecedentesPersonalesFamiliaresF08|AntecedentesPersonalesFamiliaresF08s', $n);
    }

}