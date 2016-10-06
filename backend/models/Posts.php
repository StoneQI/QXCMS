<?php

namespace backend\models;

use Yii;
use backend\models\Columns;
use backend\models\Contents;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "QX_posts".
 *
 * @property integer $id
 * @property string $post_tiltle
 * @property string $post_subtitle
 * @property string $post_image
 * @property string $post_video
 * @property string $post_link
 * @property string $post_anthor
 * @property string $post_origin
 * @property integer $post_is_top
 * @property integer $post_column_id
 * @property integer $post_status
 * @property integer $post_tag_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'QX_posts';
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
            [[ 'post_tiltle', 'post_column_id', 'post_status'], 'required'],
            [[ 'post_is_top', 'post_column_id', 'post_status', 'post_tag_id'], 'integer'],
            [['post_tiltle', 'post_subtitle'], 'string', 'max' => 255],
            [['post_image', 'post_video', 'post_link'], 'string', 'max' => 200],
            [['post_anthor'], 'string', 'max' => 50],
            [['post_origin'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_tiltle' => '文章标题',
            'post_subtitle' => '文章子标题',
            'post_image' => '图像',
            'post_video' => '视频',
            'post_link' => '文章链接',
            'post_anthor' => '作者',
            'post_origin' => '来源',
            'post_is_top' => '置顶',
            'post_column_id' => '所属栏目',
            'post_status' => '发布',
            'post_tag_id' => 'Post Tag ID',
            'created_at' => '创建时间',
            'updated_at' => '修改时间',
        ];
    }
    public function getColumn()
    {
            // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
            return $this->hasOne(Columns::className(), ['id' => 'post_column_id']);
    }

    public function getContent()
    {
            // 客户和订单通过 Order.customer_id -> id 关联建立一对多关系
            return $this->hasOne(Contents::className(), ['posts_id' => 'id']);
    }
}
