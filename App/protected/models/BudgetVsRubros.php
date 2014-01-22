<?php

/**
 * This is the model class for table "budget_vs_rubros".
 *
 * The followings are the available columns in table 'budget_vs_rubros':
 * @property string $id
 * @property string $idBudget
 * @property string $idRubro
 * @property string $amount
 * @property string $periodFrom
 * @property string $periodTo
 * @property string $status
 * @property string $creationTime
 * @property string $creationUser
 *
 * The followings are the available model relations:
 * @property Budget $idBudget0
 * @property CatRubros $idRubro0
 */
class BudgetVsRubros extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'budget_vs_rubros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idBudget, idRubro, amount, periodFrom, periodTo, status, creationTime, creationUser', 'required'),
			array('idBudget, creationUser', 'length', 'max'=>10),
			array('idRubro', 'length', 'max'=>50),
			array('amount', 'length', 'max'=>28),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idBudget, idRubro, amount, periodFrom, periodTo, status, creationTime, creationUser', 'safe', 'on'=>'search'),
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
			'idBudget0' => array(self::BELONGS_TO, 'Budget', 'idBudget'),
			'idRubro0' => array(self::BELONGS_TO, 'CatRubros', 'idRubro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idBudget' => 'Id Budget',
			'idRubro' => 'Id Rubro',
			'amount' => 'Amount',
			'periodFrom' => 'Period From',
			'periodTo' => 'Period To',
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
		$criteria->compare('idBudget',$this->idBudget,true);
		$criteria->compare('idRubro',$this->idRubro,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('periodFrom',$this->periodFrom,true);
		$criteria->compare('periodTo',$this->periodTo,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('creationTime',$this->creationTime,true);
		$criteria->compare('creationUser',$this->creationUser,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BudgetVsRubros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
