<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "QX_columns".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $column_name
 * @property string $column_link
 * @property string $column_layout
 * @property string $column_image
 * @property string $column_content
 * @property string $column_content_layout
 * @property integer $column_sort
 * @property integer $column_status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Columns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'QX_columns';
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
            [['pid', 'column_name', 'column_layout', 'column_content_layout', 'column_sort'], 'required'],
            [['pid',  'column_sort', 'column_status'], 'integer'],
            [['column_name', 'column_layout', 'column_content_layout'], 'string', 'max' => 50],
            [['column_content'],'string'],
            [['column_link', 'column_image'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => '上级栏目',
            'column_name' => '栏目名称',
            'column_link' => '栏目链接',
            'column_layout' => '栏目布局',
            'column_image' => '栏目图片',
            'column_content' => '栏目内容',
            'column_content_layout' => '栏目内容布局',
            'column_sort' => '栏目序列',
            'column_status' => '栏目状态',
            'created_at' => '建立时间',
            'updated_at' => '修改时间',
        ];
    }
    public static function getColumn($id=0,&$columns=array(),$spac=0)
    {
        $spac =$spac + 1;
        $column = static::find()->where(['pid'=>$id])->all();
        foreach ($column as $key => $value) {
            $columns[$value->id] = '|'.str_repeat('—',$spac).$value->column_name;

            static::getColumn($value->id,$columns,$spac);

        }

        return $columns;
    }
}
