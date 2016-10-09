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

    public function upload()
    {
        if ($this->validate()) {
            $file_name = 'upload/' . $this->file->baseName . '.' . $this->file->extension;
            if ($this->file->saveAs($file_name)) {
                return $file_name;
            }
             return false;
        } else {
            return false;
        }
    }
}
