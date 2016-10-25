<?php
namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file', 'skipOnEmpty' => false],
        ];
    }

    public function upload($models,$filename = 'file')
    {
        $this->file = UploadedFile::getInstance($models, $filename);
        if ($this->validate()) {
            $randStr = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
            $rand = substr($randStr,0,6);
            $file_name = 'upload/'. time() .'-'.$rand. '.' . $this->file->extension;
            if ($this->file->saveAs($file_name)) {
                return \Yii::$app->params['assets_path'].$file_name;
            }
             return false;
        } else {
            return false;
        }
    }


    public function attributeLabels()
    {
        return [
            'file' => '文件',
        ];
    }
}
