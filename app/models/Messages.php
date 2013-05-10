<?php

namespace app\models;
use \yii\db\ActiveRecord;
use \Yii;

class Messages extends ActiveRecord
{

	const DELETED_BY_RECEIVER = 1;
	const DELETED_BY_SENDER = 0;

	//public $userModel;
	//public $userModelRelation;

	public $unreadMessagesCount;

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
        return '{{%messages}}';
    }
 
    /**
     * @return array primary key of the table
     **/     
    public static function primaryKey()
    {
        return array('id');
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reciever_id', 'required'),
			array('reciever_id', 'integer'),
			array('subject', 'required'),
			array('subject', 'string', 'max'=>256),
			array('is_read', 'string', 'max'=>1),
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
			'receiver' => array(self::BELONGS_TO, 'User', 'reciever_id'),
			'sender' => array(self::BELONGS_TO, 'User', 'sender_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sender_id' => 'Sender',
			'reciever_id' => 'Receiver',
			'subject' => 'Subject',
			'body' => 'Body',
			'is_read' => 'Is Read',
			'deleted_by' => 'Deleted By',
			'creation_date' => 'Created At',
		);
	}

	public function beforeSave($insert)
	{
		if (parent::beforeSave($insert)) {
			if ($insert) {
				$this->creation_date = Date('Y-m-d H:i:s');
				$this->sender_id = Yii::$app->user->identity->id;
			}
			return true;
		}else{
			return false;
		}
	}

	public function getSenderName() {
		if ($this->sender) {
		    return $this->sender->username;
		}
	}

	public function getReceiverName() {
		if ($this->receiver) {
		    return $this->reciever->username;
		}
	}

	public static function getAdapterForInbox($userId) {
		/*$c = new CDbCriteria();
		$c->addCondition('t.reciever_id = :receiverId');
		$c->addCondition('t.deleted_by <> :deleted_by_receiver OR t.deleted_by IS NULL');
		$c->order = 't.creation_date DESC';
		$c->params = array(
			'receiverId' => $userId,
			'deleted_by_receiver' => Messages::DELETED_BY_RECEIVER,
		);
		$messagesProvider = new CActiveDataProvider('Messages', array('criteria' => $c));
		$messagesProvider->pagination->pageSize=2;
		return $messagesProvider;*/	
	}

	public static function getAdapterForSent($userId) {
		/*$c = new CDbCriteria();
		$c->addCondition('t.sender_id = :senderId');
		$c->addCondition('t.deleted_by <> :deleted_by_sender OR t.deleted_by IS NULL');
		$c->order = 't.creation_date DESC';
		$c->params = array(
			'senderId' => $userId,
			'deleted_by_sender' => Messages::DELETED_BY_SENDER,
		);
		$messagesProvider = new CActiveDataProvider('Messages', array('criteria' => $c));
		$messagesProvider->pagination->pageSize=5;
		return $messagesProvider;*/
	}

	public function deleteByUser($userId) {

		/*if (!$userId) {
			return false;
		}

		if ($this->sender_id == $this->reciever_id && $this->reciever_id == $userId) {
			$this->delete();
			return true;
		}

		if ($this->sender_id == $userId) {
			if ($this->deleted_by == self::DELETED_BY_RECEIVER) {
				$this->delete();
			} else {
				$this->deleted_by = self::DELETED_BY_SENDER;
				$this->save();
			}

			return true;
		}

		if ($this->reciever_id == $userId) {
			if ($this->deleted_by == self::DELETED_BY_SENDER) {
				$this->delete();
			} else {
				$this->deleted_by = self::DELETED_BY_RECEIVER;
				$this->save();
			}

			return true;
		}

		// message was not deleted
		return false;*/
	}

	public function markAsRead() {
		if (!$this->is_read) {
			$this->is_read = true;
			$this->save();
		}
	}

	public function getCountUnreaded($userId) {
		/*if (!$this->unreadMessagesCount) {
			$c = new CDbCriteria();
			$c->addCondition('t.reciever_id = :receiverId');
			$c->addCondition('t.deleted_by <> :deleted_by_receiver OR t.deleted_by IS NULL');
			$c->addCondition('t.is_read = "0"');
			$c->params = array(
				'receiverId' => $userId,
				'deleted_by_receiver' => Messages::DELETED_BY_RECEIVER,
			);
			$count = self::model()->count($c);
			$this->unreadMessagesCount = $count;
		}

		return $this->unreadMessagesCount;*/
	}

}
