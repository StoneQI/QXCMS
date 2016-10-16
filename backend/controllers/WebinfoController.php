<?php

namespace backend\controllers;

use Yii;
use common\models\Webinfo;
use yii\web\Controller;
use yii\filters\AccessControl;
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
                'only' => ['index', 'update'],
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
     * @inheritdoc
     */
    // public function behaviors()
    // {
    //     return [
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'delete' => ['POST'],
    //             ],
    //         ],
    //     ];
    // }

    /**
     * Lists all Webinfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $webinfo = Webinfo::getinfo();

        return $this->render('view', [
            'model' => $webinfo,
        ]);
    }

    /**
     * Displays a single Webinfo model.
     * @param integer $id
     * @return mixed
     */
    // public function actionView($id)
    // {

    // }

    /**
     * Creates a new Webinfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new Webinfo();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     } else {
    //         return $this->render('create', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    /**
     * Updates an existing Webinfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate()
    {
        $model = new Webinfo();
        //var_dump(Yii::$app->request->post());
        $webinfo = Webinfo::getinfo();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
                'webinfo'=>$webinfo
            ]);
        }
    }

    /**
     * Deletes an existing Webinfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    /**
     * Finds the Webinfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Webinfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    // protected function findModel($id)
    // {
    //     if (($model = Webinfo::findOne($id)) !== null) {
    //         return $model;
    //     } else {
    //         throw new NotFoundHttpException('The requested page does not exist.');
    //     }
    // }
}
