<?php

/**
 * This is the model class for table "work_experience".
 *
 * The followings are the available columns in table 'work_experience':
 * @property integer $experience_id
 * @property integer $student_id
 * @property string $title
 * @property string $company
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 *
 * The followings are the available model relations:
 * @property StudentDetails $student
 */
class WorkExperience extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'work_experience';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id', 'numerical', 'integerOnly'=>true),
			array('title, company', 'length', 'max'=>255),
			array('start_date, end_date, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('experience_id, student_id, title, company, start_date, end_date, description', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'StudentDetails', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'experience_id' => 'Experience',
			'student_id' => 'Student',
			'title' => 'Title',
			'company' => 'Company',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'description' => 'Description',
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

		$criteria->compare('experience_id',$this->experience_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WorkExperience the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
