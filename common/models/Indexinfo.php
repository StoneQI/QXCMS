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

    public $list_img1;
    public $list_title1;
    public $list_content1;
    public $list_url1;

    public $list_img2;
    public $list_title2;
    public $list_content2;
    public $list_url2;

    public $list_img3;
    public $list_title3;
    public $list_content3;
    public $list_url3;

    public $list_img4;
    public $list_title4;
    public $list_content4;
    public $list_url4;

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
          [['index_img', 'index_imgtext', 'center_title', 'center_content', 'center_title_right', 'center_content_right', 'list_img1', 'list_title1', 'list_content1', 'list_url1', 'list_img2', 'list_title2', 'list_content2', 'list_url2', 'list_img3', 'list_title3', 'list_content3', 'list_url3', 'list_img4', 'list_title4', 'list_content4', 'list_url4', 'footer_left_title', 'footer_left_content', 'footer_right_title', 'footer_right_content'], 'string', 'max' => 255],
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
     $index_config['list_img1'] = $this->list_img1;
     $index_config['list_title1'] = $this->list_title1;
     $index_config['list_content1'] = $this->list_content1;
     $index_config['list_url1'] = $this->list_url1;
     $index_config['list_img2'] = $this->list_img2;
     $index_config['list_title2'] = $this->list_title2;
     $index_config['list_content2'] = $this->list_content2;
     $index_config['list_url2'] = $this->list_url2;
     $index_config['list_img3'] = $this->list_img3;
     $index_config['list_title3'] = $this->list_title3;
     $index_config['list_content3'] = $this->list_content3;
     $index_config['list_url3'] = $this->list_url3;
     $index_config['list_img4'] = $this->list_img4;
     $index_config['list_title4'] = $this->list_title4;
     $index_config['list_content4'] = $this->list_content4;
     $index_config['list_url4'] = $this->list_url4;
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
    '$index_img'=>'首页大图',
    '$index_imgtext'=>'大图内容',
    '$center_title'=>'推荐标题',
    '$center_content'=>'推荐内容',
    '$center_title_right'=>'热门标题',
    '$center_content_right'=>'热门内容',
    '$list_img1'=>'文章一图片',
    '$list_title1'=>'文章一标题',
    '$list_content1'=>'文章一内容',
    '$list_url1'=>'文章一链接',
    '$list_img2'=>'文章二图片',
    '$list_title2'=>'文章二标题',
    '$list_content2'=>'文章二图片',
    '$list_url2'=>'文章二链接',
    '$list_img3'=>'文章三图片',
    '$list_title3'=>'文章三标题',
    '$list_content3'=>'文章三图片',
    '$list_url3'=>'文章三链接',
    '$list_img4'=>'文章四图片',
    '$list_title4'=>'文章四标题',
    '$list_content4'=>'文章四图片',
    '$list_url4'=>'文章四链接',
    '$footer_left_title'=>'底部右侧标题',
    '$footer_left_content'=>'底部右侧内容',
    '$footer_right_title'=>'底部左侧标题',
    '$footer_right_content'=>'底部左侧内容'
        ];
    }
}
