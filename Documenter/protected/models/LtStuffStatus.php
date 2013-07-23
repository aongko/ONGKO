<?php

/**
 * This is the model class for table "lt_stuff_status".
 *
 * The followings are the available columns in table 'lt_stuff_status':
 * @property integer $stuff_status_id
 * @property string $staff_status_name
 * @property string $remarks
 *
 * The followings are the available model relations:
 * @property TrStuff[] $trStuffs
 */
class LtStuffStatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LtStuffStatus the static model class
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
		return 'lt_stuff_status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staff_status_name, remarks', 'required'),
			array('staff_status_name', 'length', 'max'=>50),
			array('remarks', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('stuff_status_id, staff_status_name, remarks', 'safe', 'on'=>'search'),
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
			'trStuffs' => array(self::HAS_MANY, 'TrStuff', 'stuff_status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'stuff_status_id' => 'Stuff Status',
			'staff_status_name' => 'Staff Status Name',
			'remarks' => 'Remarks',
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

		$criteria->compare('stuff_status_id',$this->stuff_status_id);
		$criteria->compare('staff_status_name',$this->staff_status_name,true);
		$criteria->compare('remarks',$this->remarks,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}