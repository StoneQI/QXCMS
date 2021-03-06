<?php

namespace backend\controllers;

use Yii;
use common\models\Webinfo;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\UploadForm;
/**
 * WebinfoController implements the CRUD actions for Webinfo model.
 */
class WebinfoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Updates an existing Webinfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate()
    {
        $model = new Webinfo();
        $webinfo = Webinfo::getinfo();
        $upload_form = new UploadForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $filename = $upload_form->upload($upload_form);
            $model->web_logo = $filename?$filename:$webinfo->web_logo;
                if ($model->save()) {
                   return $this->refresh();
                }
        }
        return $this->render('update', [
                'model' => $model,
                'webinfo'=>$webinfo,
                'upload_form'=>$upload_form,
        ]);
    }
}
