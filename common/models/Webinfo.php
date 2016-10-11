<?php

namespace common\models;

use Yii;
use yii\base\Model;


class Webinfo extends Model
{
    /**
     * @inheritdoc
     */
    public $web_name;
    public $web_logo;
    public $record_id;
    public $web_phone;
    public $web_address;
    public $web_mail;

    // public static function tableName()
    // {
    //     return 'QX_webinfo';
    // }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['web_name', 'web_logo'], 'string', 'max' => 200],
            [['record_id', 'web_phone', 'web_mail', 'web_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function save()
    {
        $web_config['web_name'] = $this->web_name;
        $web_config['web_logo'] = $this->web_logo;
        $web_config['record_id'] = $this->record_id;
        $web_config['web_phone'] = $this->web_phone;
        $web_config['web_address'] = $this->web_address;
        $web_config['web_mail'] = $this->web_mail;
        $webinfo = json_encode($web_config);


        $filename =Yii::getAlias('@common').'\config\web_config.json';
        return file_put_contents($filename,$webinfo );
    }

    public static function getinfo(){
        $filename =Yii::getAlias('@common').'\config\web_config.json';
        return json_decode(file_get_contents($filename));
    }


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
