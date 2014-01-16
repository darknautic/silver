<?php

/**
 * This is the model class for table "budget".
 *
 * The followings are the available columns in table 'budget':
 * @property string $id
 * @property string $amount
 * @property string $description
 * @property string $periodFrom
 * @property string $periodTo
 * @property string $type
 * @property string $status
 * @property string $creationTime
 * @property integer $creationUser
 */
class Budget extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'budget';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('amount, periodFrom, periodTo, type, status, creationTime, creationUser', 'required'),
			array('creationUser', 'numerical', 'integerOnly'=>true),
			array('amount', 'length', 'max'=>28),
			array('description', 'length', 'max'=>300),
			array('type', 'length', 'max'=>50),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, amount, description, periodFrom, periodTo, type, status, creationTime, creationUser', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'amount' => 'Amount',
			'description' => 'Description',
			'periodFrom' => 'Period From',
			'periodTo' => 'Period To',
			'type' => 'Type',
			'status' => 'Status',
			'creationTime' => 'Creation Time',
			'creationUser' => 'Creation User',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('periodFrom',$this->periodFrom,true);
		$criteria->compare('periodTo',$this->periodTo,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('creationTime',$this->creationTime,true);
		$criteria->compare('creationUser',$this->creationUser);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Budget the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
