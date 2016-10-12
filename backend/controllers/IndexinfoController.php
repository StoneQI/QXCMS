<?php

namespace backend\controllers;

use Yii;
use common\models\Indexinfo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class IndexinfoController extends Controller
{
    public function actionIndex()
    {
    	$model = Indexinfo::getinfo();
        return $this->render('index',[
        	'model'=>$model ]
        	);
    }

    public function actionUpdate()
    {
    	$model = new Indexinfo();
        $indexinfo = Indexinfo::getinfo();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           return $this->redirect(['index']);
        } else {
          return $this->render('update', [
                'model' => $model,
                'indexinfo'=>$indexinfo
             ]);
        }
    }

}
