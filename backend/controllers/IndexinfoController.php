<?php

namespace backend\controllers;

use Yii;
use common\models\Indexinfo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\UploadForm;

class IndexinfoController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [ 'update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionUpdate()
    {
    	$model = new Indexinfo();
        $indexinfo = Indexinfo::getinfo();
        $upload_form = new UploadForm();


        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $filename = $upload_form->upload($upload_form);
            $model->index_img = $filename?$filename:$indexinfo->index_img;
                if ($model->save()) {
                    return $this->refresh();                }
        }
        return $this->render('update', [
                'model' => $model,
                'indexinfo'=>$indexinfo,
                'upload_form'=>$upload_form,
        ]);

    }
}
