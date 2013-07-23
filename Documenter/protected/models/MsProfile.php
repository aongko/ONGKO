<?php

/**
 * This is the model class for table "ms_profile".
 *
 * The followings are the available columns in table 'ms_profile':
 * @property integer $profile_id
 * @property integer $user_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $date_of_birth
 * @property integer $city_id
 * @property integer $gender_id
 * @property integer $religion_id
 *
 * The followings are the available model relations:
 * @property MsUser $user
 * @property LtCity $city
 * @property LtGender $gender
 * @property LtReligion $religion
 * @property MsUser[] $msUsers
 * @property TrMappingContact[] $trMappingContacts
 */
class MsProfile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MsProfile the static model class
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
		return 'ms_profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, first_name, date_of_birth, city_id, gender_id, religion_id', 'required'),
			array('user_id, city_id, gender_id, religion_id', 'numerical', 'integerOnly'=>true),
			array('first_name, middle_name, last_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('profile_id, user_id, first_name, middle_name, last_name, date_of_birth, city_id, gender_id, religion_id', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'MsUser', 'user_id'),
			'city' => array(self::BELONGS_TO, 'LtCity', 'city_id'),
			'gender' => array(self::BELONGS_TO, 'LtGender', 'gender_id'),
			'religion' => array(self::BELONGS_TO, 'LtReligion', 'religion_id'),
			'msUsers' => array(self::HAS_MANY, 'MsUser', 'profile_id'),
			'trMappingContacts' => array(self::HAS_MANY, 'TrMappingContact', 'profile_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'profile_id' => 'Profile',
			'user_id' => 'User',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'date_of_birth' => 'Date Of Birth',
			'city_id' => 'City',
			'gender_id' => 'Gender',
			'religion_id' => 'Religion',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('gender_id',$this->gender_id);
		$criteria->compare('religion_id',$this->religion_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}