<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "qx_labor".
 *
 * @property integer $Id
 * @property string $name
 * @property string $sex
 * @property string $age
 * @property string $species
 * @property string $technician
 * @property string $license_number
 * @property string $address
 * @property string $phone
 * @property string $remarks
 * @property integer $status
 */
class Labor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qx_labor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'sex', 'age','license_number', 'address'], 'required'],
            [['name', 'species'], 'string', 'max' => 50],
            [[ 'age'], 'string', 'max' => 8],
            ['status', 'default', 'value' => 1],
            ['sex', 'in', 'range' => ['男', '女']],
            [['technician'], 'string', 'max' => 200],
            [['license_number'], 'string', 'max' => 18],
            [['address'], 'string', 'max' => 250],
            [['phone'], 'string', 'max' => 11],
            [['remarks'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'name' => '名字',
            'sex' => '性别',
            'age' => '年龄',
            'species' => '工种',
            'technician' => '技工证',
            'license_number' => '证件号',
            'address' => '地址',
            'phone' => '电话',
            'remarks' => '备注',
            'status' => 'Status',
        ];
    }
}
