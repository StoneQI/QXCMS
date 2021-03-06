<?php

namespace backend\controllers;

use Yii;
use common\models\Labor;
use common\models\LaborSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\UploadForm;
/**
 * LaborController implements the CRUD actions for Labor model.
 */
class LaborController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Labor models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LaborSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Labor model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Labor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Labor();
        $upload_form = new UploadForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($filename = $upload_form->upload($upload_form)) {
                $model->technician = $filename;
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->Id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
            'upload_form'=>$upload_form
        ]);
    }

    /**
     * Updates an existing Labor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $upload_form = new UploadForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($filename = $upload_form->upload($upload_form)) {
                $model->technician = $filename;
            }
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->Id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
            'upload_form'=>$upload_form
        ]);
    }

    /**
     * Deletes an existing Labor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $labor = $this->findModel($id);
        if ($labor) {
            $labor->status = 0;
            $labor->save();
        }
        return $this->redirect(['index']);

    }

    /**
     * Finds the Labor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Labor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Labor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
