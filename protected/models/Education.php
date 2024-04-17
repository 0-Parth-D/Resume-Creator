<?php

/**
 * This is the model class for table "education".
 *
 * The followings are the available columns in table 'education':
 * @property integer $education_id
 * @property integer $student_id
 * @property string $degree
 * @property string $school
 * @property integer $graduationYear
 *
 * The followings are the available model relations:
 * @property StudentDetails $student
 */
class Education extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'education';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, graduationYear', 'numerical', 'integerOnly'=>true),
			array('degree, school', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('education_id, student_id, degree, school, graduationYear', 'safe', 'on'=>'search'),
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
			'education_id' => 'Education',
			'student_id' => 'Student',
			'degree' => 'Degree',
			'school' => 'School',
			'graduationYear' => 'Graduation Year',
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

		$criteria->compare('education_id',$this->education_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('graduationYear',$this->graduationYear);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Education the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
