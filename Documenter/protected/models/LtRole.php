<?php

/**
 * This is the model class for table "lt_role".
 *
 * The followings are the available columns in table 'lt_role':
 * @property integer $role_id
 * @property string $role_name
 * @property integer $privilege_id
 *
 * The followings are the available model relations:
 * @property LtPrivilege $privilege
 * @property MsUser[] $msUsers
 */
class LtRole extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LtRole the static model class
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
		return 'lt_role';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_id, role_name, privilege_id', 'required'),
			array('role_id, privilege_id', 'numerical', 'integerOnly'=>true),
			array('role_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('role_id, role_name, privilege_id', 'safe', 'on'=>'search'),
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
			'privilege' => array(self::BELONGS_TO, 'LtPrivilege', 'privilege_id'),
			'msUsers' => array(self::HAS_MANY, 'MsUser', 'role_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'role_id' => 'Role',
			'role_name' => 'Role Name',
			'privilege_id' => 'Privilege',
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

		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('role_name',$this->role_name,true);
		$criteria->compare('privilege_id',$this->privilege_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}