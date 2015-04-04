<?php

/**
 * This is the model class for table "analytics".
 *
 * The followings are the available columns in table 'analytics':
 * @property string $id
 * @property string $num_users
 * @property string $num_renting_users
 * @property string $num_spaces
 * @property string $num_groups
 * @property string $num_leases
 * @property double $avg_groups_per_space
 * @property double $avg_users_per_space
 * @property double $avg_users_per_group
 * @property double $avg_distance_to_space
 * @property string $num_owning_users
 * @property double $percent_users_owning
 * @property double $percent_users_renting
 * @property double $avg_groups_per_user
 * @property double $avg_spaces_per_user
 */
class Analytics extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'analytics';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('num_users, num_renting_users, num_spaces, num_groups, num_leases, avg_groups_per_space, avg_users_per_space, avg_users_per_group, avg_distance_to_space, num_owning_users, percent_users_owning, percent_users_renting, avg_groups_per_user, avg_spaces_per_user', 'required'),
			array('avg_groups_per_space, avg_users_per_space, avg_users_per_group, avg_distance_to_space, percent_users_owning, percent_users_renting, avg_groups_per_user, avg_spaces_per_user', 'numerical'),
			array('num_users, num_renting_users, num_spaces, num_groups, num_leases, num_owning_users', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, num_users, num_renting_users, num_spaces, num_groups, num_leases, avg_groups_per_space, avg_users_per_space, avg_users_per_group, avg_distance_to_space, num_owning_users, percent_users_owning, percent_users_renting, avg_groups_per_user, avg_spaces_per_user', 'safe', 'on'=>'search'),
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
			'num_users' => 'Num Users',
			'num_renting_users' => 'Num Renting Users',
			'num_spaces' => 'Num Spaces',
			'num_groups' => 'Num Groups',
			'num_leases' => 'Num Leases',
			'avg_groups_per_space' => 'Avg Groups Per Space',
			'avg_users_per_space' => 'Avg Users Per Space',
			'avg_users_per_group' => 'Avg Users Per Group',
			'avg_distance_to_space' => 'Avg Distance To Space',
			'num_owning_users' => 'Num Owning Users',
			'percent_users_owning' => 'Percent Users Owning',
			'percent_users_renting' => 'Percent Users Renting',
			'avg_groups_per_user' => 'Avg Groups Per User',
			'avg_spaces_per_user' => 'Avg Spaces Per User',
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
		$criteria->compare('num_users',$this->num_users,true);
		$criteria->compare('num_renting_users',$this->num_renting_users,true);
		$criteria->compare('num_spaces',$this->num_spaces,true);
		$criteria->compare('num_groups',$this->num_groups,true);
		$criteria->compare('num_leases',$this->num_leases,true);
		$criteria->compare('avg_groups_per_space',$this->avg_groups_per_space);
		$criteria->compare('avg_users_per_space',$this->avg_users_per_space);
		$criteria->compare('avg_users_per_group',$this->avg_users_per_group);
		$criteria->compare('avg_distance_to_space',$this->avg_distance_to_space);
		$criteria->compare('num_owning_users',$this->num_owning_users,true);
		$criteria->compare('percent_users_owning',$this->percent_users_owning);
		$criteria->compare('percent_users_renting',$this->percent_users_renting);
		$criteria->compare('avg_groups_per_user',$this->avg_groups_per_user);
		$criteria->compare('avg_spaces_per_user',$this->avg_spaces_per_user);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Analytics the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
