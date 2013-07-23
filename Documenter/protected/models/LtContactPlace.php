<?php

/**
 * This is the model class for table "lt_contact_place".
 *
 * The followings are the available columns in table 'lt_contact_place':
 * @property integer $contact_place_id
 * @property string $contact_place
 *
 * The followings are the available model relations:
 * @property TrMappingContact[] $trMappingContacts
 */
class LtContactPlace extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LtContactPlace the static model class
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
		return 'lt_contact_place';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_place', 'required'),
			array('contact_place', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('contact_place_id, contact_place', 'safe', 'on'=>'search'),
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
			'trMappingContacts' => array(self::HAS_MANY, 'TrMappingContact', 'contact_place_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_place_id' => 'Contact Place',
			'contact_place' => 'Contact Place',
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

		$criteria->compare('contact_place_id',$this->contact_place_id);
		$criteria->compare('contact_place',$this->contact_place,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}