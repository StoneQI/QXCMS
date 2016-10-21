<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "QX_contents".
 *
 * @property integer $id
 * @property string $content
 * @property integer $posts_id
 */
class Contents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'QX_contents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'posts_id'], 'required'],
            [[ 'posts_id'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => '内容',
            'posts_id' => 'Posts ID',
        ];
    }
}
