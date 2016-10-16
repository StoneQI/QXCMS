<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "qx_contacts".
 *
 * @property integer $Id
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qx_contacts';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
             ['status', 'default', 'value' => 0],
            [['content'], 'required'],
            [['content'], 'string'],
            [['name', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'name' => '姓名',
            'phone' => '电话',
            'address' => '地址',
            'content' => '留言内容',
            'created_at' => '提交时间',
            'updated_at' => 'Updated At',
        ];
    }
}
