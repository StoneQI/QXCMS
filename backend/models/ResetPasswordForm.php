<?php
namespace backend\models;

use Yii;
use yii\base\Model;
use yii\base\InvalidParamException;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $oldpassword;
    public $password;
    public $password_repeat;

    /**
     * @var \backend\models\User
     */
    private $_user;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['password', 'compare'],
            ['oldpassword', 'validatePassword'],
            [['password','oldpassword','password_repeat'], 'required'],
            [['password','password_repeat'], 'string', 'min' => 6],
        ];
    }
    public function validatePassword($attribute, $params)
    {
        $user = $this->getUser();
        if (!$user || !$user->validatePassword($this->oldpassword)) {
            $this->addError($attribute, '用户名或密码错误。');
        }

    }

    /**
     * Resets password.
     *
     * @return boolean if password was reset.
     */
    public function resetPassword()
    {

        $user = $this->getUser();
        $user->setPassword($this->password);

        return $user->save(false);

    }

    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername(Yii::$app->user->identity->username);
        }

        return $this->_user;
    }
    public function attributeLabels()
    {
        return [
            'oldpassword' => '旧密码',
            'password' => '新密码',
            'password_repeat' => '重复新密码',

        ];
    }
}
