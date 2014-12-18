<?php

/**
 * This is the model base class for the table "archivo.enfermedad_actual_revision_sistemas_f08".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "EnfermedadActualRevisionSistemasF08".
 *
 * Columns in table "archivo.enfermedad_actual_revision_sistemas_f08" available as properties of the model,
 * followed by relations of table "archivo.enfermedad_actual_revision_sistemas_f08" available as properties of the model.
 *
 * @property integer $id_earesi
 * @property boolean $via_aerea_libre
 * @property boolean $via_aerea_obstruida
 * @property boolean $condicion_estable
 * @property boolean $condicion_inestables
 * @property string $observaciones
 *
 * @property Ficha08[] $ficha08s
 */
abstract class BaseEnfermedadActualRevisionSistemasF08 extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'archivo.enfermedad_actual_revision_sistemas_f08';
    }

    public static function representingColumn() {
        return 'observaciones';
    }

    public function rules() {
        return array(
            array('id_earesi', 'required'),
            array('id_earesi', 'numerical', 'integerOnly'=>true),
            array('via_aerea_libre, via_aerea_obstruida, condicion_estable, condicion_inestables, observaciones', 'safe'),
            array('via_aerea_libre, via_aerea_obstruida, condicion_estable, condicion_inestables, observaciones', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id_earesi, via_aerea_libre, via_aerea_obstruida, condicion_estable, condicion_inestables, observaciones', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'ficha08s' => array(self::HAS_MANY, 'Ficha08', 'id_earesi_f08'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_earesi' => Yii::t('app', 'Id Earesi'),
                'via_aerea_libre' => Yii::t('app', 'Via Aerea Libre'),
                'via_aerea_obstruida' => Yii::t('app', 'Via Aerea Obstruida'),
                'condicion_estable' => Yii::t('app', 'Condicion Estable'),
                'condicion_inestables' => Yii::t('app', 'Condicion Inestables'),
                'observaciones' => Yii::t('app', 'Observaciones'),
                'ficha08s' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_earesi', $this->id_earesi);
        $criteria->compare('via_aerea_libre', $this->via_aerea_libre);
        $criteria->compare('via_aerea_obstruida', $this->via_aerea_obstruida);
        $criteria->compare('condicion_estable', $this->condicion_estable);
        $criteria->compare('condicion_inestables', $this->condicion_inestables);
        $criteria->compare('observaciones', $this->observaciones, true);

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