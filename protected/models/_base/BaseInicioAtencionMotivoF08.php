<?php

/**
 * This is the model base class for the table "archivo.inicio_atencion_motivo_f08".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "InicioAtencionMotivoF08".
 *
 * Columns in table "archivo.inicio_atencion_motivo_f08" available as properties of the model,
 * followed by relations of table "archivo.inicio_atencion_motivo_f08" available as properties of the model.
 *
 * @property integer $id_iam
 * @property string $hora
 * @property boolean $trauma
 * @property boolean $causa_clinica
 * @property boolean $causa_gobstetrica
 * @property boolean $causa_quirurgica
 * @property boolean $notificacion_policia
 * @property string $otro_motivo
 * @property string $grupo_sanguineo_factor_rh
 *
 * @property Ficha08[] $ficha08s
 */
abstract class BaseInicioAtencionMotivoF08 extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'archivo.inicio_atencion_motivo_f08';
    }

    public static function representingColumn() {
        return 'otro_motivo';
    }

    public function rules() {
        return array(
            array('id_iam', 'required'),
            array('id_iam', 'numerical', 'integerOnly'=>true),
            array('grupo_sanguineo_factor_rh', 'length', 'max'=>4),
            array('hora, trauma, causa_clinica, causa_gobstetrica, causa_quirurgica, notificacion_policia, otro_motivo', 'safe'),
            array('hora, trauma, causa_clinica, causa_gobstetrica, causa_quirurgica, notificacion_policia, otro_motivo, grupo_sanguineo_factor_rh', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id_iam, hora, trauma, causa_clinica, causa_gobstetrica, causa_quirurgica, notificacion_policia, otro_motivo, grupo_sanguineo_factor_rh', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'ficha08s' => array(self::BELONGS_TO, 'Ficha08', 'id_iam_f08'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_iam' => Yii::t('app', 'Id Iam'),
                'hora' => Yii::t('app', 'Hora'),
                'trauma' => Yii::t('app', 'Trauma'),
                'causa_clinica' => Yii::t('app', 'Causa Clinica'),
                'causa_gobstetrica' => Yii::t('app', 'Causa Gobstetrica'),
                'causa_quirurgica' => Yii::t('app', 'Causa Quirurgica'),
                'notificacion_policia' => Yii::t('app', 'Notificacion Policia'),
                'otro_motivo' => Yii::t('app', 'Otro Motivo'),
                'grupo_sanguineo_factor_rh' => Yii::t('app', 'Grupo Sanguineo Factor Rh'),
                'ficha08s' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_iam', $this->id_iam);
        $criteria->compare('hora', $this->hora, true);
        $criteria->compare('trauma', $this->trauma);
        $criteria->compare('causa_clinica', $this->causa_clinica);
        $criteria->compare('causa_gobstetrica', $this->causa_gobstetrica);
        $criteria->compare('causa_quirurgica', $this->causa_quirurgica);
        $criteria->compare('notificacion_policia', $this->notificacion_policia);
        $criteria->compare('otro_motivo', $this->otro_motivo, true);
        $criteria->compare('grupo_sanguineo_factor_rh', $this->grupo_sanguineo_factor_rh, true);

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