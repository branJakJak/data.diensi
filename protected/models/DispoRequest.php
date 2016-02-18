<?php

/**
 * This is the model class for table "tbl_dispo_request".
 *
 * The followings are the available columns in table 'tbl_dispo_request':
 * @property integer $id
 * @property integer $dispo_conf_id
 * @property string $mobile_number
 * @property string $request_parameters
 * @property string $request_from
 * @property string $response_message
 * @property string $date_submitted
 *
 * The followings are the available model relations:
 * @property TblDispoConfiguration $dispoConf
 */
class DispoRequest extends CActiveRecord
{
	public $response_message;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_dispo_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mobile_number', 'required'),
			array('dispo_conf_id', 'numerical', 'integerOnly'=>true),
			array('mobile_number, request_from,response_message', 'length', 'max'=>255),
			array('request_parameters, date_submitted', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dispo_conf_id, mobile_number, request_parameters, request_from, date_submitted', 'safe', 'on'=>'search'),
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
			'dispoConf' => array(self::BELONGS_TO, 'TblDispoConfiguration', 'dispo_conf_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dispo_conf_id' => 'Dispo Configuration',
			'mobile_number' => 'Mobile Number',
			'request_parameters' => 'Request Parameters',
			'request_from' => 'Request From',
			'response_message' => 'Response Message',
			'date_submitted' => 'Date Submitted',
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
		$criteria->compare('dispo_conf_id',$this->dispo_conf_id);
		$criteria->compare('mobile_number',$this->mobile_number,true);
		$criteria->compare('request_parameters',$this->request_parameters,true);
		$criteria->compare('request_from',$this->request_from,true);
		$criteria->compare('response_message',$this->response_message,true);
		$criteria->compare('date_submitted',$this->date_submitted,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DispoRequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function beforeSave()
	{
		if ($this->isNewRecord) {
			$this->date_submitted =  date("Y-m-d H:i:s");
		}
	}
}
