<?php

Yii::import('application.models._base.BaseAvieqF08');

class AvieqF08 extends BaseAvieqF08
{
    /**
     * @return AvieqF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'AvieqF08|AvieqF08s', $n);
    }

}