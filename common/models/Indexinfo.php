<?php

namespace common\models;

use Yii;
use yii\base\Model;


class Indexinfo extends Model
{
    /**
     * @inheritdoc
     */
    public $index_img;
    public $index_imgtext;


    public $center_title;
    public $center_content;

    public $center_title_right;
    public $center_content_right;

    public $footer_left_title;
    public $footer_left_content;

    public $footer_right_title;
    public $footer_right_content;

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
          [['index_img', 'index_imgtext', 'center_title', 'center_content', 'center_title_right', 'center_content_right', 'footer_left_title', 'footer_left_content', 'footer_right_title', 'footer_right_content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function save()
    {

     $index_config['index_img'] = $this->index_img;
     $index_config['index_imgtext'] = $this->index_imgtext;
     $index_config['center_title'] = $this->center_title;
     $index_config['center_content'] = $this->center_content;
     $index_config['center_title_right'] = $this->center_title_right;
     $index_config['center_content_right'] = $this->center_content_right;
     $index_config['footer_left_title'] = $this->footer_left_title;
     $index_config['footer_left_content'] = $this->footer_left_content;
     $index_config['footer_right_title'] = $this->footer_right_title;
     $index_config['footer_right_content'] = $this->footer_right_content;
     $indexinfo = json_encode($index_config);


     $filename =Yii::getAlias('@common').'\config\index_config.json';
     return file_put_contents($filename,$indexinfo);
    }

    public static function getinfo(){
        $filename =Yii::getAlias('@common').'\config\index_config.json';
        return json_decode(file_get_contents($filename));
    }


    public function attributeLabels()
    {
        return [
    'index_img'=>'首页大图',
    'index_imgtext'=>'大图内容',
    'center_title'=>'推荐标题',
    'center_content'=>'推荐内容',
    'center_title_right'=>'热门标题',
    'center_content_right'=>'热门内容',
    'footer_left_title'=>'底部左侧标题',
    'footer_left_content'=>'底部左侧内容',
    'footer_right_title'=>'底部右侧标题',
    'footer_right_content'=>'底部右侧内容'
        ];
    }
}
