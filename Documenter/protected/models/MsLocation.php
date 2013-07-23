<?php

/**
 * This is the model class for table "ms_location".
 *
 * The followings are the available columns in table 'ms_location':
 * @property integer $location_id
 * @property string $location_name
 * @property string $remarks
 * @property integer $city_id
 *
 * The followings are the available model relations:
 * @property LtCity $city
 * @property TrStuff[] $trStuffs
 */
class MsLocation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MsLocation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ms_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('location_name, remarks, city_id', 'required'),
			array('city_id', 'numerical', 'integerOnly'=>true),
			array('location_name', 'length', 'max'=>50),
			array('remarks', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('location_id, location_name, remarks, city_id', 'safe', 'on'=>'search'),
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
			'city' => array(self::BELONGS_TO, 'LtCity', 'city_id'),
			'trStuffs' => array(self::HAS_MANY, 'TrStuff', 'location_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'location_id' => 'Location',
			'location_name' => 'Location Name',
			'remarks' => 'Remarks',
			'city_id' => 'City',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('location_name',$this->location_name,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('city_id',$this->city_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}