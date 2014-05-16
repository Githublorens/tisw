<?php

/**
 * This is the model class for table "avance".
 *
 * The followings are the available columns in table 'avance':
 * @property integer $id_propuesta
 * @property string $ava_ruta
 * @property string $ava_comentario
 * @property string $ava_titulo
 * @property integer $id_tesis
 *
 * The followings are the available model relations:
 * @property Tesis $idTesis
 */
class Avance extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'avance';
	}

	public function onFileUploaded($fullFileName,$userdata){
		yii::app()->session['file_name']=$fullFileName;
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_tesis', 'numerical', 'integerOnly'=>true),
			array('ava_ruta, ava_titulo', 'length', 'max'=>50),
			array('ava_titulo', 'required', 'message' => '<span class="required">Este campo es requerido</span>'),
			array('ava_comentario', 'safe'),
			array('ava_comentario', 'required', 'message' => '<span class="required">Este campo es requerido</span>'),
			array('id_propuesta, ava_ruta, ava_comentario, ava_titulo, id_tesis', 'safe', 'on'=>'search'),
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
			'idTesis' => array(self::BELONGS_TO, 'Tesis', 'id_tesis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_propuesta' => 'Id Propuesta',
			'ava_ruta' => 'Ava Ruta',
			'ava_comentario' => 'Comentario',
			'ava_titulo' => 'Título',
			'id_tesis' => 'Id Tesis',
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

		$criteria->compare('id_propuesta',$this->id_propuesta);
		$criteria->compare('ava_ruta',$this->ava_ruta,true);
		$criteria->compare('ava_comentario',$this->ava_comentario,true);
		$criteria->compare('ava_titulo',$this->ava_titulo,true);
		$criteria->compare('id_tesis',$this->id_tesis);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Avance the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
