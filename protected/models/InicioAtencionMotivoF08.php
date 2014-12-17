<?php

/**
 * This is the model class for table "archivo.inicio_atencion_motivo_f08".
 *
 * The followings are the available columns in table 'archivo.inicio_atencion_motivo_f08':
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
 * The followings are the available model relations:
 * @property Ficha08[] $ficha08s
 */
class InicioAtencionMotivoF08 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'archivo.inicio_atencion_motivo_f08';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_iam', 'required'),
			array('id_iam', 'numerical', 'integerOnly'=>true),
			array('grupo_sanguineo_factor_rh', 'length', 'max'=>4),
			array('hora, trauma, causa_clinica, causa_gobstetrica, causa_quirurgica, notificacion_policia, otro_motivo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_iam, hora, trauma, causa_clinica, causa_gobstetrica, causa_quirurgica, notificacion_policia, otro_motivo, grupo_sanguineo_factor_rh', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ficha08s' => array(self::HAS_MANY, 'Ficha08', 'id_iam_f08'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_iam' => 'Id Iam',
			'hora' => 'Hora',
			'trauma' => 'Trauma',
			'causa_clinica' => 'Causa Clinica',
			'causa_gobstetrica' => 'Causa Gobstetrica',
			'causa_quirurgica' => 'Causa Quirurgica',
			'notificacion_policia' => 'Notificacion Policia',
			'otro_motivo' => 'Otro Motivo',
			'grupo_sanguineo_factor_rh' => 'Grupo Sanguineo Factor Rh',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_iam',$this->id_iam);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('trauma',$this->trauma);
		$criteria->compare('causa_clinica',$this->causa_clinica);
		$criteria->compare('causa_gobstetrica',$this->causa_gobstetrica);
		$criteria->compare('causa_quirurgica',$this->causa_quirurgica);
		$criteria->compare('notificacion_policia',$this->notificacion_policia);
		$criteria->compare('otro_motivo',$this->otro_motivo,true);
		$criteria->compare('grupo_sanguineo_factor_rh',$this->grupo_sanguineo_factor_rh,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InicioAtencionMotivoF08 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
