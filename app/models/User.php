<?php

namespace app\models;

class User extends \yii\db\ActiveRecord implements \yii\web\Identity
{
	public $id;
	public $username;
	public $password;
	public $authKey;

	/**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Comments the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'tbl_user';
    }
 
    /**
     * @return array primary key of the table
     **/     
    public static function primaryKey()
    {
        return array('id');
    }
 
 	public function rules()
	{
	    return array(
	        array('username, password', 'required'),
	    );
	}

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'username' => 'Title',
            'password' => 'Password',
            'content' => 'Content'
        );
    }

	public static function findIdentity($id)
	{
		return self::find($id);
	}

	public static function findByUsername($username)
	{
		return self::find()->where('username = :username',array(':username'=>$username));//)?self::find()->where('username = :username',array(':username'=>$username)):NULL;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getAuthKey()
	{
		return $this->authKey;
	}

	public function validateAuthKey($authKey)
	{
		return $this->authKey === $authKey;
	}

	public function validatePassword($password)
	{
		return $this->password === md5($password);
	}

}