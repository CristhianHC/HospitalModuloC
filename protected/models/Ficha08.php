<?php

Yii::import('application.models._base.BaseFicha08');

class Ficha08 extends BaseFicha08
{
    /**
     * @return Ficha08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Ficha08|Ficha08s', $n);
    }

}