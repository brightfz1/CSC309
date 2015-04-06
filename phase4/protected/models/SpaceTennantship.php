<?php

/**
 * This is the model class for table "space_tennantship".
 *
 * The followings are the available columns in table 'space_tennantship':
 * @property integer $id
 * @property string $UID
 * @property string $SID
 */
class SpaceTennantship extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'space_tennantship';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UID, SID', 'required'),
			array('UID, SID', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, UID, SID', 'safe', 'on'=>'search'),
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
			'UID' => 'Uid',
			'SID' => 'Sid',
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
		$criteria->compare('UID',$this->UID,true);
		$criteria->compare('SID',$this->SID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SpaceTennantship the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function GetFriend($uid){
		$friend = array();
		$GroupName = $this->model()->find(array(
				'select' =>array('SID'),
				'condition' => 'UID='.$uid,
			));
		foreach ($GroupName as $group){
			$sid = $group->attributes['SID'];
			$FriendName = $this->model()->find(array(
					'select' =>array('UID'),
					'condition' => 'SID='.$sid,
			));
			foreach ($FriendName as $name){
				if (!in_array($name,$friend)){
					$UserName = User::model()->find(array(
						'select' =>array('first_name','last_name'),
						'condition' => 'UID='.$name,
				    ));
					$first_name = $UserName->attributes['first_name'];
					$last_name = $UserName->attributes['last_name'];
					$user = $last_name . $first_name;
					array_push( $friend, $name);
				 	array_push($friend, $user);
				}
			}
		}
		return $friend;
	}
	
	public function IsFriend($uid){
		$GroupName = SpaceTennantship::model()->findAll(array(
				'select' =>array('SID'),
				'condition' => 'UID='.$uid,
		));
			
		foreach ($GroupName as $sid){
			$s = $sid->attributes['SID'];
	
			$FriendName = SpaceTennantship::model()->findAll(array(
					'select' =>array('UID'),
					'condition' => 'SID='.$s,
			));
	
			foreach ($FriendName as $name){
				$n = $name->attributes['UID'];
				if ($n === yii::app()->user->id){
					return 1;
				}
			}
	
		}
	
		return 0;
	}
}
