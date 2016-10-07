<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "QX_files".
 *
 * @property integer $id
 * @property string $file_url
 * @property string $file_type
 * @property integer $file_status
 * @property string $file_name
 * @property integer $created_at
 * @property integer $updated_at
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'QX_files';
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
            [[ 'file_url'], 'required'],
            [[ 'file_status'], 'integer'],
            [['file_url'], 'string', 'max' => 255],
            [['file_type'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_url' => '文件地址',
            'file_type' => '文件类型',
            'file_status' => 'File Status',
            'file_name' => '文件名',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
