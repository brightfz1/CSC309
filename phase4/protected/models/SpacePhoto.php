<?php

/**
 * This is the model class for table "space_photo".
 *
 * The followings are the available columns in table 'space_photo':
 * @property string $id
 * @property string $SID
 * @property string $photo_filename
 * @property string $photo_data
 */
class SpacePhoto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	
    
    public function tableName()
	{
		return 'space_photo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('SID', 'required'),
            array('photo_data', 'file', 
                  'types' => 'jpg,jpeg,png,gif', 
                  'allowEmpty' => true),
			array('SID', 'length', 'max'=>10),
			array('photo_filename', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, SID, photo_filename, photo_data', 'safe', 'on'=>'search'),
		);
	}
    
    public function beforeSave() {
        if ($file = CUploadedFile::getInstance($this, 'photo_data')) {
                $this->photo_filename = $file;
                $this->photo_data = file_get_contents($file->tempName);
        }
        return parent::beforeSave();
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
			'SID' => 'Sid',
			'photo_filename' => 'Photo Filename',
			'photo_data' => 'Photo Data',
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
		$criteria->compare('SID',$this->SID,true);
		$criteria->compare('photo_filename',$this->photo_filename,true);
		$criteria->compare('photo_data',$this->photo_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SpacePhoto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
