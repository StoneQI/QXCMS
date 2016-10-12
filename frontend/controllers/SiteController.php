<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Columns;
use backend\models\Posts;
use common\models\Contacts;
use common\models\Webinfo;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

     // $filename =Yii::getAlias('@common').'\config\index_config.json';

    //  $index_config = json_decode(file_get_contents($filename));
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionColumn($id,$pid=-1)
    {
            $cloumns = Columns::findOne($id);
            $hig_column['id'] =id;
            $hig_column['name'] =$cloumns->name;
            $cloumns = Columns::find()->where(['pid'=>$id])->all();
            $i=0;
            foreach ($cloumns as $key => $value) {

                $column[$i]['name'] = $value->column_name;
                $column[$i]['id'] = $value->id;
                $i++;
            }
            if ($pid==-1) {
                $pid = $column['0']['id'];
            }
            $posts = Posts::find()->where(['post_column_id'=>$pid])->orderBy('post_sort DESC')->all();

            return $this->render($cloumns->column_layout, [
                'hig_column' => $hig_column,
                'column' => $column,
                'posts' => $posts
            ]);

    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionPost($id)
    {
            $post = Posts::findOne($id);
            return $this->render('post', [
                'post' => $post,
            ]);

    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new Contacts();
        $web_config = Webinfo::getinfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', '留言成功');
            return $this->render('contact',[
                'web_config'=> $web_config]);
        } else {
           // Yii::$app->session->setFlash('error', '留言失败，请重试');
            return $this->render('contact',[
                'web_config'=> $web_config]);
        }

    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
