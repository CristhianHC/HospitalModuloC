<?php

/**
 * This is the model base class for the table "archivo.plan_tratamiento_f08".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PlanTratamientoF08".
 *
 * Columns in table "archivo.plan_tratamiento_f08" available as properties of the model,
 * followed by relations of table "archivo.plan_tratamiento_f08" available as properties of the model.
 *
 * @property integer $id_plan_tratamiento
 * @property string $indicaciones
 * @property string $medicamento
 * @property string $posologia
 *
 * @property Ficha08[] $ficha08s
 */
abstract class BasePlanTratamientoF08 extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'archivo.plan_tratamiento_f08';
    }

    public static function representingColumn() {
        return 'indicaciones';
    }

    public function rules() {
        return array(
            array('id_plan_tratamiento', 'required'),
            array('id_plan_tratamiento', 'numerical', 'integerOnly'=>true),
            array('indicaciones, medicamento, posologia', 'safe'),
            array('indicaciones, medicamento, posologia', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id_plan_tratamiento, indicaciones, medicamento, posologia', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'ficha08s' => array(self::HAS_MANY, 'Ficha08', 'id_plan_tratamiento_f08'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_plan_tratamiento' => Yii::t('app', 'Id Plan Tratamiento'),
                'indicaciones' => Yii::t('app', 'Indicaciones'),
                'medicamento' => Yii::t('app', 'Medicamento'),
                'posologia' => Yii::t('app', 'Posologia'),
                'ficha08s' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_plan_tratamiento', $this->id_plan_tratamiento);
        $criteria->compare('indicaciones', $this->indicaciones, true);
        $criteria->compare('medicamento', $this->medicamento, true);
        $criteria->compare('posologia', $this->posologia, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
            'ActiveRecordRelation' => array(
                'class' => 'EActiveRecordRelationBehavior',
            ),
        ), parent::behaviors());
    }
}