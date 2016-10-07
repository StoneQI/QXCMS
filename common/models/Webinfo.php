<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "QX_webinfo".
 *
 * @property integer $id
 * @property string $web_name
 * @property string $web_logo
 * @property string $record_id
 * @property string $web_phone
 * @property string $web_mail
 * @property string $web_address
 */
class Webinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'QX_webinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['web_name', 'web_logo'], 'string', 'max' => 200],
            [['record_id', 'web_phone', 'web_mail', 'web_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'web_name' => '网站名字',
            'web_logo' => '网站LOGO',
            'record_id' => '备案号',
            'web_phone' => '手机号码',
            'web_mail' => '邮箱号码',
            'web_address' => '网站地址',
        ];
    }
}
