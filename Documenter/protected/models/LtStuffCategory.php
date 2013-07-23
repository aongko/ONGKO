<?php

/**
 * This is the model class for table "lt_stuff_category".
 *
 * The followings are the available columns in table 'lt_stuff_category':
 * @property integer $stuff_category_id
 * @property string $stuff_category_name
 * @property integer $importance_level_id
 * @property integer $parent_id
 *
 * The followings are the available model relations:
 * @property LtImportance $importanceLevel
 * @property TrStuff[] $trStuffs
 */
class LtStuffCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LtStuffCategory the static model class
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
		return 'lt_stuff_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stuff_category_name, importance_level_id', 'required'),
			array('importance_level_id, parent_id', 'numerical', 'integerOnly'=>true),
			array('stuff_category_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('stuff_category_id, stuff_category_name, importance_level_id, parent_id', 'safe', 'on'=>'search'),
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
			'importanceLevel' => array(self::BELONGS_TO, 'LtImportance', 'importance_level_id'),
			'trStuffs' => array(self::HAS_MANY, 'TrStuff', 'stuff_category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'stuff_category_id' => 'Stuff Category',
			'stuff_category_name' => 'Stuff Category Name',
			'importance_level_id' => 'Importance Level',
			'parent_id' => 'Parent',
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

		$criteria->compare('stuff_category_id',$this->stuff_category_id);
		$criteria->compare('stuff_category_name',$this->stuff_category_name,true);
		$criteria->compare('importance_level_id',$this->importance_level_id);
		$criteria->compare('parent_id',$this->parent_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}