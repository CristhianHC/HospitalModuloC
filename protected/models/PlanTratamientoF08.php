<?php

Yii::import('application.models._base.BasePlanTratamientoF08');

class PlanTratamientoF08 extends BasePlanTratamientoF08
{
    /**
     * @return PlanTratamientoF08
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'PlanTratamientoF08|PlanTratamientoF08s', $n);
    }

}