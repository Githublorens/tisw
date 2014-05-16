<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $alu_rut
 * @property string $alu_clave
 * @property string $alu_nombre
 * @property string $alu_apellido_paterno
 * @property string $alu_apellido_materno
 * @property string $alu_direccion
 * @property string $alu_email
 * @property string $alu_fono
 * @property string $alu_carrera
 * @property string $alu_informe_curricular
 * @property string $pro_rut
 * @property string $jef_rut
 *
 * The followings are the available model relations:
 * @property Profesor $proRut
 * @property JefeCarrera $jefRut
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alu_rut', 'required'),
			array('alu_rut, pro_rut, jef_rut', 'length', 'max'=>12),
			array('alu_clave, alu_informe_curricular', 'length', 'max'=>50),
			array('alu_nombre, alu_apellido_paterno, alu_apellido_materno', 'length', 'max'=>10),
			array('alu_direccion, alu_email, alu_carrera', 'length', 'max'=>30),
			array('alu_fono', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('alu_rut, alu_clave, alu_nombre, alu_apellido_paterno, alu_apellido_materno, alu_direccion, alu_email, alu_fono, alu_carrera, alu_informe_curricular, pro_rut, jef_rut', 'safe', 'on'=>'search'),
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
			'proRut' => array(self::BELONGS_TO, 'Profesor', 'pro_rut'),
			'jefRut' => array(self::BELONGS_TO, 'JefeCarrera', 'jef_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'alu_rut' => 'Alu Rut',
			'alu_clave' => 'Alu Clave',
			'alu_nombre' => 'Alu Nombre',
			'alu_apellido_paterno' => 'Alu Apellido Paterno',
			'alu_apellido_materno' => 'Alu Apellido Materno',
			'alu_direccion' => 'Alu Direccion',
			'alu_email' => 'Alu Email',
			'alu_fono' => 'Alu Fono',
			'alu_carrera' => 'Alu Carrera',
			'alu_informe_curricular' => 'Alu Informe Curricular',
			'pro_rut' => 'Pro Rut',
			'jef_rut' => 'Jef Rut',
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

		$criteria->compare('alu_rut',$this->alu_rut,true);
		$criteria->compare('alu_clave',$this->alu_clave,true);
		$criteria->compare('alu_nombre',$this->alu_nombre,true);
		$criteria->compare('alu_apellido_paterno',$this->alu_apellido_paterno,true);
		$criteria->compare('alu_apellido_materno',$this->alu_apellido_materno,true);
		$criteria->compare('alu_direccion',$this->alu_direccion,true);
		$criteria->compare('alu_email',$this->alu_email,true);
		$criteria->compare('alu_fono',$this->alu_fono,true);
		$criteria->compare('alu_carrera',$this->alu_carrera,true);
		$criteria->compare('alu_informe_curricular',$this->alu_informe_curricular,true);
		$criteria->compare('pro_rut',$this->pro_rut,true);
		$criteria->compare('jef_rut',$this->jef_rut,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
