<?php

/**
 * This is the model class for table "tblprofile".
 *
 * The followings are the available columns in table 'tblprofile':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $email
 * @property string $dateentered
 */
class Tblprofile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $file;

	public function tableName()
	{
		return 'tblprofile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, fullname, email', 'required'),
			array('username, password', 'length', 'max'=>50),
			array('fullname, email', 'length', 'max'=>100),
			array('email', 'email'),
			// sample below for file
			// array('product_gallery_2, product_gallery_3, product_gallery_4, product_gallery_5, product_gallery_6', 'file', 'safe'=>true, 'allowEmpty' => TRUE,'types'=>'jpg, jpeg, png, gif', 'maxSize' => 600000, 'on'=>'insert,update,create'),
			array('anyfile', 'file', 'safe'=>true, 'types'=>'jpg, jpeg, png, gif', 'maxSize' => 600000, 'on'=>'insert,update,create'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, fullname, email, dateentered', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'password' => 'Password',
			'fullname' => 'Fullname',
			'email' => 'Email',
			'thefile' => 'Upload File',
			'dateentered' => 'Dateentered',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('dateentered',$this->dateentered,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tblprofile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
