<?php

/**
 * This is the model class for table "admision.paciente".
 *
 * The followings are the available columns in table 'admision.paciente':
 * @property integer $idpaciente
 * @property string $cedula
 * @property string $primernombre
 * @property string $segundonombre
 * @property string $apellidopaterno
 * @property string $apellidomaterno
 * @property string $fechanacimiento
 * @property string $sexo
 * @property string $grupocultural
 * @property string $referenciapadre
 * @property string $referenciamadre
 * @property string $lugarnacimiento
 * @property string $provincia
 * @property string $canton
 * @property string $parroquia
 * @property string $zona
 * @property integer $telefono
 * @property string $barrio
 * @property string $direccionresidencia
 * @property string $seguro
 * @property string $empresa
 * @property string $ocupacion
 * @property string $estadocivil
 * @property string $iinstruccion
 * @property string $casollamar
 * @property string $parentescoafinidad
 * @property string $telefonoparentesco
 * @property string $direccionparestenco
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admision.paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idpaciente', 'required'),
			array('idpaciente, telefono', 'numerical', 'integerOnly'=>true),
			array('cedula', 'length', 'max'=>10),
			array('primernombre, segundonombre, apellidopaterno, apellidomaterno, referenciapadre, referenciamadre, lugarnacimiento, provincia, canton, seguro, ocupacion, estadocivil, iinstruccion, casollamar, parentescoafinidad, telefonoparentesco, direccionparestenco', 'length', 'max'=>50),
			array('sexo, grupocultural', 'length', 'max'=>5),
			array('zona, barrio, empresa', 'length', 'max'=>100),
			array('direccionresidencia', 'length', 'max'=>200),
			array('fechanacimiento, parroquia', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpaciente, cedula, primernombre, segundonombre, apellidopaterno, apellidomaterno, fechanacimiento, sexo, grupocultural, referenciapadre, referenciamadre, lugarnacimiento, provincia, canton, parroquia, zona, telefono, barrio, direccionresidencia, seguro, empresa, ocupacion, estadocivil, iinstruccion, casollamar, parentescoafinidad, telefonoparentesco, direccionparestenco', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpaciente' => 'Idpaciente',
			'cedula' => 'Cedula',
			'primernombre' => 'Primernombre',
			'segundonombre' => 'Segundonombre',
			'apellidopaterno' => 'Apellidopaterno',
			'apellidomaterno' => 'Apellidomaterno',
			'fechanacimiento' => 'Fechanacimiento',
			'sexo' => 'Sexo',
			'grupocultural' => 'Grupocultural',
			'referenciapadre' => 'Referenciapadre',
			'referenciamadre' => 'Referenciamadre',
			'lugarnacimiento' => 'Lugarnacimiento',
			'provincia' => 'Provincia',
			'canton' => 'Canton',
			'parroquia' => 'Parroquia',
			'zona' => 'Zona',
			'telefono' => 'Telefono',
			'barrio' => 'Barrio',
			'direccionresidencia' => 'Direccionresidencia',
			'seguro' => 'Seguro',
			'empresa' => 'Empresa',
			'ocupacion' => 'Ocupacion',
			'estadocivil' => 'Estadocivil',
			'iinstruccion' => 'Iinstruccion',
			'casollamar' => 'Casollamar',
			'parentescoafinidad' => 'Parentescoafinidad',
			'telefonoparentesco' => 'Telefonoparentesco',
			'direccionparestenco' => 'Direccionparestenco',
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

		$criteria->compare('idpaciente',$this->idpaciente);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('primernombre',$this->primernombre,true);
		$criteria->compare('segundonombre',$this->segundonombre,true);
		$criteria->compare('apellidopaterno',$this->apellidopaterno,true);
		$criteria->compare('apellidomaterno',$this->apellidomaterno,true);
		$criteria->compare('fechanacimiento',$this->fechanacimiento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('grupocultural',$this->grupocultural,true);
		$criteria->compare('referenciapadre',$this->referenciapadre,true);
		$criteria->compare('referenciamadre',$this->referenciamadre,true);
		$criteria->compare('lugarnacimiento',$this->lugarnacimiento,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('canton',$this->canton,true);
		$criteria->compare('parroquia',$this->parroquia,true);
		$criteria->compare('zona',$this->zona,true);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('direccionresidencia',$this->direccionresidencia,true);
		$criteria->compare('seguro',$this->seguro,true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('estadocivil',$this->estadocivil,true);
		$criteria->compare('iinstruccion',$this->iinstruccion,true);
		$criteria->compare('casollamar',$this->casollamar,true);
		$criteria->compare('parentescoafinidad',$this->parentescoafinidad,true);
		$criteria->compare('telefonoparentesco',$this->telefonoparentesco,true);
		$criteria->compare('direccionparestenco',$this->direccionparestenco,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
