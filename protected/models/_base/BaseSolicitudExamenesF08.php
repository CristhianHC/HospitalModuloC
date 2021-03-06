<?php

/**
 * This is the model base class for the table "archivo.solicitud_examenes_f08".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "SolicitudExamenesF08".
 *
 * Columns in table "archivo.solicitud_examenes_f08" available as properties of the model,
 * followed by relations of table "archivo.solicitud_examenes_f08" available as properties of the model.
 *
 * @property integer $id_solicitud_examenes
 * @property boolean $biometria
 * @property boolean $quimica_sanguinea
 * @property boolean $gasometria
 * @property boolean $endoscopia
 * @property boolean $r_x_abdomen
 * @property boolean $tomografia
 * @property boolean $ecografia_pelvica
 * @property boolean $interconsulta
 * @property boolean $uroanalisis
 * @property boolean $electrolitos
 * @property boolean $electro_cardiograma
 * @property boolean $r_x_torax
 * @property boolean $r_x_osea
 * @property boolean $resonancia
 * @property boolean $ecografia_abdomen
 * @property boolean $otros
 *
 * @property Ficha08[] $ficha08s
 */
abstract class BaseSolicitudExamenesF08 extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'archivo.solicitud_examenes_f08';
    }

    public static function representingColumn() {
        return 'id_solicitud_examenes';
    }

    public function rules() {
        return array(
            array('biometria, quimica_sanguinea, gasometria, endoscopia, r_x_abdomen, tomografia, ecografia_pelvica, interconsulta, uroanalisis, electrolitos, electro_cardiograma, r_x_torax, r_x_osea, resonancia, ecografia_abdomen, otros', 'safe'),
            array('biometria, quimica_sanguinea, gasometria, endoscopia, r_x_abdomen, tomografia, ecografia_pelvica, interconsulta, uroanalisis, electrolitos, electro_cardiograma, r_x_torax, r_x_osea, resonancia, ecografia_abdomen, otros', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id_solicitud_examenes, biometria, quimica_sanguinea, gasometria, endoscopia, r_x_abdomen, tomografia, ecografia_pelvica, interconsulta, uroanalisis, electrolitos, electro_cardiograma, r_x_torax, r_x_osea, resonancia, ecografia_abdomen, otros', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'ficha08s' => array(self::HAS_MANY, 'Ficha08', 'id_solicitud_examenes_f08'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_solicitud_examenes' => Yii::t('app', 'Id Solicitud Examenes'),
                'biometria' => Yii::t('app', 'Biometria'),
                'quimica_sanguinea' => Yii::t('app', 'Quimica Sanguinea'),
                'gasometria' => Yii::t('app', 'Gasometria'),
                'endoscopia' => Yii::t('app', 'Endoscopia'),
                'r_x_abdomen' => Yii::t('app', 'R X Abdomen'),
                'tomografia' => Yii::t('app', 'Tomografia'),
                'ecografia_pelvica' => Yii::t('app', 'Ecografia Pelvica'),
                'interconsulta' => Yii::t('app', 'Interconsulta'),
                'uroanalisis' => Yii::t('app', 'Uroanalisis'),
                'electrolitos' => Yii::t('app', 'Electrolitos'),
                'electro_cardiograma' => Yii::t('app', 'Electro Cardiograma'),
                'r_x_torax' => Yii::t('app', 'R X Torax'),
                'r_x_osea' => Yii::t('app', 'R X Osea'),
                'resonancia' => Yii::t('app', 'Resonancia'),
                'ecografia_abdomen' => Yii::t('app', 'Ecografia Abdomen'),
                'otros' => Yii::t('app', 'Otros'),
                'ficha08s' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_solicitud_examenes', $this->id_solicitud_examenes);
        $criteria->compare('biometria', $this->biometria);
        $criteria->compare('quimica_sanguinea', $this->quimica_sanguinea);
        $criteria->compare('gasometria', $this->gasometria);
        $criteria->compare('endoscopia', $this->endoscopia);
        $criteria->compare('r_x_abdomen', $this->r_x_abdomen);
        $criteria->compare('tomografia', $this->tomografia);
        $criteria->compare('ecografia_pelvica', $this->ecografia_pelvica);
        $criteria->compare('interconsulta', $this->interconsulta);
        $criteria->compare('uroanalisis', $this->uroanalisis);
        $criteria->compare('electrolitos', $this->electrolitos);
        $criteria->compare('electro_cardiograma', $this->electro_cardiograma);
        $criteria->compare('r_x_torax', $this->r_x_torax);
        $criteria->compare('r_x_osea', $this->r_x_osea);
        $criteria->compare('resonancia', $this->resonancia);
        $criteria->compare('ecografia_abdomen', $this->ecografia_abdomen);
        $criteria->compare('otros', $this->otros);

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