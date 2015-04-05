<?php

/**
 * This is the model class for table "space".
 *
 * The followings are the available columns in table 'space':
 * @property string $id
 * @property string $name
 * @property string $address
 * @property string $description
 * @property string $num_ratings
 * @property string $num_tenants
 * @property string $num_groups
 * @property string $OWNER_SID
 * @property string $tag
 * @property string $space_type
 * @property double $rating_score
 */
class Space extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'space';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, address, description, tag, space_type', 'required'),
			array('name, address, tag, space_type', 'length', 'max'=>100),
			array('description', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('name, address, description, tag, space_type', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'address' => 'Address',
			'description' => 'Description',
			'num_ratings' => 'Num Ratings',
			'num_tenants' => 'Num Tenants',
			'num_groups' => 'Num Groups',
			'OWNER_SID' => 'Owner Sid',
			'tag' => 'Tag',
			'space_type' => 'Space Type',
			'rating_score' => 'Rating Score',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('num_ratings',$this->num_ratings,true);
		$criteria->compare('num_tenants',$this->num_tenants,true);
		$criteria->compare('num_groups',$this->num_groups,true);
		$criteria->compare('OWNER_SID',$this->OWNER_SID,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('space_type',$this->space_type,true);
		$criteria->compare('rating_score',$this->rating_score);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Space the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	function getData() {
	


	$data = Yii::app()->db->createCommand()
    ->select('*')
    ->from('space')
    ->queryAll();
    return $data;
    
    
    // $sql = "*";
//     $data = Yii::app()->db
//         ->createCommand($sql)
//         ->queryAll();
//     return $data;
}


    public function getGroup($id) {
		$group = Group::model()->findAll(array(
  			'select' =>array('id','name'),
			'condition' => 'sid='.$id,
		));
		$result = array();
		$i = 0;
		foreach ($group as $req) {
			$gid = $req->attributes['id'];
			$gname = $req->attributes['name'];
			$result[$i]['GID'] = $gid;
			$result[$i]['gname'] = $gname;
			$i++;
		}
		return $result;
    }
    
    public function getPhoto($id) {
		$photo = SpacePhoto::model()->findAll(array(
  			'select' =>array('id','photo_data'),
			'condition' => 'sid='.$id,
		));
		$result = array();
		$i = 0;
		foreach ($photo as $req) {
			$pid = $req->attributes['id'];
			$pdata = $req->attributes['photo_data'];
			$result[$i]['PID'] = $pid;
			$result[$i]['pdata'] = $pdata;
			$i++;
		}
		return $result;
    }
 
 	public function ShowGroup($id) {
		$group = $this->getGroup($id);
		return $group;
// 		$result = " ";
// 		foreach ($group as $req) {
// 
// 			$result = $result.$req['gname']."&&&";
// 
// 		}
		
// 		return $result;
	}
    
    public function ShowPhoto($id) {
		$photo = $this->getPhoto($id);
		return $photo;
// 		$result = " ";
// 		foreach ($group as $req) {
// 
// 			$result = $result.$req['gname']."&&&";
// 
// 		}
		
// 		return $result;
	}
}

