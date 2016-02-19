<?php

/**
 * This is the model class for table "tbl_dispo_configuration".
 *
 * The followings are the available columns in table 'tbl_dispo_configuration':
 * @property integer $id
 * @property string $dispo_name
 * @property string $server_ip
 * @property string $list_id
 * @property string $source
 * @property string $user
 * @property string $pass
 * @property string $function
 * @property string $phone_code
 * @property string $dnc_check
 * @property string $duplicate_check
 * @property string $add_to_hopper
 * @property string $hopper_priority
 *
 * The followings are the available model relations:
 * @property TblDispoRequest[] $tblDispoRequests
 */
class DispoConfiguration extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_dispo_configuration';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dispo_name, server_ip, list_id', 'required'),
			array('dispo_name, server_ip, list_id, source, user, pass, function, phone_code, dnc_check, duplicate_check, add_to_hopper, hopper_priority', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dispo_name, server_ip, list_id, source, user, pass, function, phone_code, dnc_check, duplicate_check, add_to_hopper, hopper_priority', 'safe', 'on'=>'search'),
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
			'tblDispoRequests' => array(self::HAS_MANY, 'TblDispoRequest', 'dispo_conf_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dispo_name' => 'Dispo Name',
			'server_ip' => 'Server URL',
			'list_id' => 'List',
			'source' => 'Source',
			'user' => 'User',
			'pass' => 'Pass',
			'function' => 'Function',
			'phone_code' => 'Phone Code',
			'dnc_check' => 'Dnc Check',
			'duplicate_check' => 'Duplicate Check',
			'add_to_hopper' => 'Add To Hopper',
			'hopper_priority' => 'Hopper Priority',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('dispo_name',$this->dispo_name,true);
		$criteria->compare('server_ip',$this->server_ip,true);
		$criteria->compare('list_id',$this->list_id,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('function',$this->function,true);
		$criteria->compare('phone_code',$this->phone_code,true);
		$criteria->compare('dnc_check',$this->dnc_check,true);
		$criteria->compare('duplicate_check',$this->duplicate_check,true);
		$criteria->compare('add_to_hopper',$this->add_to_hopper,true);
		$criteria->compare('hopper_priority',$this->hopper_priority,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DispoConfiguration the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
