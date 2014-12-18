<?php

Yii::import('application.models._base.BaseSignosVitalesMedicinalesF08');

class SignosVitalesMedicinalesF08 extends BaseSignosVitalesMedicinalesF08
{
    /**
     * @return SignosVitalesMedicinalesF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'SignosVitalesMedicinalesF08|SignosVitalesMedicinalesF08s', $n);
    }

}