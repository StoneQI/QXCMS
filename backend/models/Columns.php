<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "QX_columns".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $column_name
 * @property string $column_link
 * @property string $column_layout
 * @property string $column_image
 * @property integer $column_content_id
 * @property string $column_content_layout
 * @property integer $column_sort
 * @property integer $column_status
 * @property integer $createtime
 * @property integer $updatetime
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'column_name', 'column_layout', 'column_content_layout', 'column_sort', 'createtime', 'updatetime'], 'required'],
            [['pid', 'column_content_id', 'column_sort', 'column_status', 'createtime', 'updatetime'], 'integer'],
            [['column_name', 'column_layout', 'column_content_layout'], 'string', 'max' => 50],
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
            'pid' => 'Pid',
            'column_name' => 'Column Name',
            'column_link' => 'Column Link',
            'column_layout' => 'Column Layout',
            'column_image' => 'Column Image',
            'column_content_id' => 'Column Content ID',
            'column_content_layout' => 'Column Content Layout',
            'column_sort' => 'Column Sort',
            'column_status' => 'Column Status',
            'createtime' => 'Createtime',
            'updatetime' => 'Updatetime',
        ];
    }
}
