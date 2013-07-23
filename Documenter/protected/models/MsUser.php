<?php

/**
 * This is the model class for table "ms_user".
 *
 * The followings are the available columns in table 'ms_user':
 * @property integer $user_id
 * @property string $user_name
 * @property string $password
 * @property integer $profile_id
 * @property integer $role_id
 *
 * The followings are the available model relations:
 * @property MsProfile[] $msProfiles
 * @property MsProfile $profile
 * @property LtRole $role
 * @property TrStuff[] $trStuffs
 */
class MsUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MsUser the static model class
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
		return 'ms_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, password, profile_id, role_id', 'required'),
			array('profile_id, role_id', 'numerical', 'integerOnly'=>true),
			array('user_name', 'length', 'max'=>50),
			array('password', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_name, password, profile_id, role_id', 'safe', 'on'=>'search'),
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
			'msProfiles' => array(self::HAS_MANY, 'MsProfile', 'user_id'),
			'profile' => array(self::BELONGS_TO, 'MsProfile', 'profile_id'),
			'role' => array(self::BELONGS_TO, 'LtRole', 'role_id'),
			'trStuffs' => array(self::HAS_MANY, 'TrStuff', 'owner_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'user_name' => 'User Name',
			'password' => 'Password',
			'profile_id' => 'Profile',
			'role_id' => 'Role',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('profile_id',$this->profile_id);
		$criteria->compare('role_id',$this->role_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}