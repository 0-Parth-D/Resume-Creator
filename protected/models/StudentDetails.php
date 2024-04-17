<?php

/**
 * This is the model class for table "student_details".
 *
 * The followings are the available columns in table 'student_details':
 * @property integer $id
 * @property string $name
 * @property integer $cell_number
 * @property string $email
 * @property integer $dept_id
 * @property integer $program_id
 *
 * The followings are the available model relations:
 * @property Education[] $educations
 * @property ExtraCurricular[] $extraCurriculars
 * @property Skills[] $skills
 * @property Department $dept
 * @property Program $program
 * @property WorkExperience[] $workExperiences
 */
class StudentDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cell_number, dept_id, program_id', 'numerical', 'integerOnly'=>true),
			array('name, email', 'length', 'max'=>255),
			array('cell_number, dept_id, program_id', 'required'),
			array('name', 'required'),
			array('email', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, cell_number, email, dept_id, program_id', 'safe', 'on'=>'search'),
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
			'educations' => array(self::HAS_MANY, 'Education', 'student_id'),
			'extraCurriculars' => array(self::HAS_MANY, 'ExtraCurricular', 'student_id'),
			'skills' => array(self::HAS_MANY, 'Skills', 'student_id'),
			'dept' => array(self::BELONGS_TO, 'Department', 'dept_id'),
			'program' => array(self::BELONGS_TO, 'Program', 'program_id'),
			'workExperiences' => array(self::HAS_MANY, 'WorkExperience', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'cell_number' => 'Cell Number',
			'email' => 'Email',
			'dept_id' => 'Dept',
			'program_id' => 'Program',
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
                
		$criteria=new CDbCriteria();
                
		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('cell_number',$this->cell_number);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('dept_id',$this->dept_id);
		$criteria->compare('program_id',$this->program_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
