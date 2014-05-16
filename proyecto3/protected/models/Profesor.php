<?php

/**
 * This is the model class for table "profesor".
 *
 * The followings are the available columns in table 'profesor':
 * @property string $pro_rut
 * @property string $pro_clave
 * @property string $pro_nombre
 * @property string $pro_apellido_paterno
 * @property string $pro_apellido_materno
 * @property string $pro_direccion
 * @property string $pro_email
 * @property string $pro_fono
 * @property string $pro_tipo
 * @property string $adm_rut
 *
 * The followings are the available model relations:
 * @property Alumno[] $alumnos
 * @property Administrador $admRut
 */
class Profesor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_rut', 'validateRut'),
			array('pro_rut', 'required', 'message' => '<span class="required">Este campo es requerido</span>'),
			
			array('pro_rut, adm_rut', 'length', 'max'=>12),
			array('pro_clave', 'length', 'max'=>50),
			array('pro_clave', 'required', 'message' => '<span class="required">Este campo es requerido</span>'),
			array('pro_nombre, pro_apellido_paterno, pro_apellido_materno', 'length', 'max'=>10),
			array('pro_nombre', 'required', 'message' => '<span class="required">Este campo es requerido</span>'),
			array('pro_direccion, pro_email', 'length', 'max'=>30),
			array('pro_email', 'email', 'message' => '<span class="required">El correo es invalido</span>'),
			array('pro_fono', 'length', 'max'=>8),
			array('pro_tipo', 'length', 'max'=>15),
			array('pro_tipo', 'required', 'message' => '<span class="required">Este campo es requerido</span>'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_rut, pro_clave, pro_nombre, pro_apellido_paterno, pro_apellido_materno, pro_direccion, pro_email, pro_fono, pro_tipo, adm_rut', 'safe', 'on'=>'search'),
		);
	}
	
	public function validateRut($attribute, $params) {
	$data = explode('-', $this->pro_rut); 
	$evaluate = strrev($data[0]); 
	$multiply = 2; $store = 0; 
	for ($i = 0; $i < strlen($evaluate); $i++) 
		{ 
		$store += $evaluate[$i] * $multiply; $multiply++; if ($multiply > 7) $multiply = 2; 
		} 
	isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = ''; 
	$result = 11 - ($store % 11); 
	if ($result == 10) $result = 'k'; 
	if ($result == 11) $result = 0; 
	if ($verifyCode != $result) $this->addError('pro_rut', '<span class="required">Rut invalido.</span>'); 
		
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'alumnos' => array(self::HAS_MANY, 'Alumno', 'pro_rut'),
			'admRut' => array(self::BELONGS_TO, 'Administrador', 'adm_rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pro_rut' => 'Pro Rut',
			'pro_clave' => 'Pro Clave',
			'pro_nombre' => 'Pro Nombre',
			'pro_apellido_paterno' => 'Pro Apellido Paterno',
			'pro_apellido_materno' => 'Pro Apellido Materno',
			'pro_direccion' => 'Pro Direccion',
			'pro_email' => 'Pro Email',
			'pro_fono' => 'Pro Fono',
			'pro_tipo' => 'Pro Tipo',
			'adm_rut' => 'Adm Rut',
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

		$criteria->compare('pro_rut',$this->pro_rut,true);
		$criteria->compare('pro_clave',$this->pro_clave,true);
		$criteria->compare('pro_nombre',$this->pro_nombre,true);
		$criteria->compare('pro_apellido_paterno',$this->pro_apellido_paterno,true);
		$criteria->compare('pro_apellido_materno',$this->pro_apellido_materno,true);
		$criteria->compare('pro_direccion',$this->pro_direccion,true);
		$criteria->compare('pro_email',$this->pro_email,true);
		$criteria->compare('pro_fono',$this->pro_fono,true);
		$criteria->compare('pro_tipo',$this->pro_tipo,true);
		$criteria->compare('adm_rut',$this->adm_rut,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
