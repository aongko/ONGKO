<?php

/**
 * This is the model class for table "tr_mapping_contact".
 *
 * The followings are the available columns in table 'tr_mapping_contact':
 * @property integer $profile_id
 * @property integer $contact_type_id
 * @property integer $contact_place_id
 * @property string $value
 *
 * The followings are the available model relations:
 * @property MsProfile $profile
 * @property LtContact $contactType
 * @property LtContactPlace $contactPlace
 */
class TrMappingContact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TrMappingContact the static model class
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
		return 'tr_mapping_contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('profile_id, contact_type_id, contact_place_id, value', 'required'),
			array('profile_id, contact_type_id, contact_place_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('profile_id, contact_type_id, contact_place_id, value', 'safe', 'on'=>'search'),
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
			'profile' => array(self::BELONGS_TO, 'MsProfile', 'profile_id'),
			'contactType' => array(self::BELONGS_TO, 'LtContact', 'contact_type_id'),
			'contactPlace' => array(self::BELONGS_TO, 'LtContactPlace', 'contact_place_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'profile_id' => 'Profile',
			'contact_type_id' => 'Contact Type',
			'contact_place_id' => 'Contact Place',
			'value' => 'Value',
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

		$criteria->compare('profile_id',$this->profile_id);
		$criteria->compare('contact_type_id',$this->contact_type_id);
		$criteria->compare('contact_place_id',$this->contact_place_id);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}