<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $tag
 * @property string $email_address
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $gender
 * @property string $phone_number
 * @property string $bio
 * @property double $rating_score
 * @property string $num_ratings
 * @property string $num_groups
 * @property string $num_spaces_renting
 * @property string $num_spaces_owning
 * @property string $photo_filename
 */
class User extends CActiveRecord
{
	
	/**
	 * Property for receiving the file from the form
	 * It should be different from any other field in the database
	 */
	public $image;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email_address, password, first_name, last_name, address, gender, phone_number', 'required'),
			array('rating_score', 'numerical'),
			array('tag, first_name, last_name, address', 'length', 'max'=>100),
			array('email_address', 'length', 'max'=>254),
			array('password, gender', 'length', 'max'=>32),
			array('phone_number, num_ratings, num_groups, num_spaces_renting, num_spaces_owning', 'length', 'max'=>10),
			array('bio', 'length', 'max'=>1000),
			array('image', 'file', 'types'=>'jpg, gif, png'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tag, email_address, password, first_name, last_name, address, gender, phone_number, bio, rating_score, num_ratings, num_groups, num_spaces_renting, num_spaces_owning, photo_filename', 'safe', 'on'=>'search'),
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
			'spaceRequest'=>array(self::BELONGS_TO, 'SpaceRequest', 'UID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tag' => 'Tag',
			'email_address' => 'Email Address',
			'password' => 'Password',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'address' => 'Address',
			'gender' => 'Gender',
			'phone_number' => 'Phone Number',
			'bio' => 'Bio',
			'rating_score' => 'Rating Score',
			'num_ratings' => 'Num Ratings',
			'num_groups' => 'Num Groups',
			'num_spaces_renting' => 'Num Spaces Renting',
			'num_spaces_owning' => 'Num Spaces Owning',
			'photo_filename' => 'Your Photo',
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
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('bio',$this->bio,true);
		$criteria->compare('rating_score',$this->rating_score);
		$criteria->compare('num_ratings',$this->num_ratings,true);
		$criteria->compare('num_groups',$this->num_groups,true);
		$criteria->compare('num_spaces_renting',$this->num_spaces_renting,true);
		$criteria->compare('num_spaces_owning',$this->num_spaces_owning,true);
		$criteria->compare('photo_filename',$this->photo_filename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function validatePassword ($password) {
		return $this->encrypt($password) === $this->password;
	}
	
	public function encrypt ($plain_password) {
		return md5($plain_password);
	}
	
	protected function beforeSave() {
		if (parent::beforeSave()) {
			//save password
			if ($this->isNewRecord) {
				$this->password = $this->encrypt($this->password);
			}
			return true;
		} else {
			return false;
		}
	}
	
	public function getSpaceRequest($uid) {
		$spaceRequest = SpaceRequest::model()->findAll(array(
  			'select' =>array('SID','acceptance'),
			'condition' => 'UID='.$uid,
		));
		$result = array();
		$i = 0;
		foreach ($spaceRequest as $req) {
			$sid = $req->attributes['SID'];
			$acc = $req->attributes['acceptance'];
			$result[$i]['SID'] = $sid;
			$spaceName = Space::model()->find(array(
				'select' =>array('name'),
				'condition' => 'id='.$sid,
			));
			$status = "";
			switch ($acc) {
				case 2:
					$status = "Pending";
					break;
				case 1:
					$status = "Acceptance";
					break;
				case 0:
					$status = "Refuse";
					break;
			}
			$result[$i]['acceptance'] = $status;
			$result[$i]['name'] = $spaceName->attributes['name'];
			$i++;
		}
// 		echo "<pre>";
// 		print_r($result);
// 		exit;
		return $result;
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}