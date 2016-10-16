<?php

namespace backend\controllers;

use Yii;
use backend\models\Columns;
use backend\models\Posts;
use backend\models\ColumnsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ColumnController implements the CRUD actions for Columns model.
 */
class ColumnController extends Controller
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
     * Lists all Columns models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ColumnsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Columns model.
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
     * Creates a new Columns model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Columns();
        $columns = Columns::getColumn(0);
        var_dump(Yii::$app->request->post());
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'columns' => $columns,
            ]);
        }
    }

    /**
     * Updates an existing Columns model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $columns = Columns::getColumn(0);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'columns' => $columns
            ]);
        }
    }

    /**
     * Deletes an existing Columns model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (!Columns::find()->where(['pid'=>$id])->one()) {
           if (!Posts::find()->where(['post_column_id'=>$id])->one()) {
                $this->findModel($id)->delete();
            }else{
                Yii::$app->session->setFlash('error', '不能删除有文章的栏目');
            }
        }else{
           Yii::$app->session->setFlash('error', '不能删除上级栏目');
        }




        return $this->redirect(['index']);
    }

    /**
     * Finds the Columns model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Columns the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Columns::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function getColumn($id=0,&$columns=array(),$spac=0)
    {
        $spac =$spac + 1;
        $column = Columns::find()->where(['pid'=>$id])->all();
        foreach ($column as $key => $value) {
            $columns[$value->id] = '|'.str_repeat('—',$spac).$value->column_name;

            $this->getColumn($value->id,$columns,$spac);

        }

        return $columns;
    }

    public function actions()
    {
        return [
            'upload' => [
                'class' => 'kucha\ueditor\UEditorAction',
                'config' => [
                                "imageUrlPrefix"  => "http://localhost/",//图片访问路径前缀
                                "imagePathFormat" => "/QXCMS/backend/web/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}", //上传保存路径
                                "imageRoot" => Yii::getAlias("@common"),
                            ],
            ]
        ];
    }

}

