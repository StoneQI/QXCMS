<?php

namespace backend\controllers;

use Yii;
use backend\models\Posts;
use backend\models\Columns;
use backend\models\Contents;
use backend\models\PostsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * PostController implements the CRUD actions for Posts model.
 */
class PostController extends Controller
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
     * Lists all Posts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Posts model.
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
     * Creates a new Posts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Posts();
        $columns = Columns::getColumn(0);
        $contents =new Contents();

        if ($model->load(Yii::$app->request->post()) && $model->save() && $this->saveContent($model->attributes['id'],Yii::$app->request->post('Contents'),'create') ) {
            //echo array_values($model->getFirstErrors())[0];exit;
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
           // echo array_values($model->getFirstErrors())[0];exit;
            return $this->render('create', [
                'model' => $model,
               'columns' =>$columns,
                'contents' =>$contents
            ]);
        }
    }

    /**
     * Updates an existing Posts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $columns = Columns::getColumn(0);
        $contents =Contents::find()->where(['posts_id'=>$id])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()  && $this->saveContent($model->attributes['id'],Yii::$app->request->post('contents'),'update') ) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'columns' =>$columns,
                 'contents' =>$contents
            ]);
        }
    }

    /**
     * Deletes an existing Posts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
       $model = $this->findModel($id);
       $model->post_status = -1;
       $model->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Posts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Posts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Posts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('这个请求页面不存在.');
        }
    }
    protected function saveContent($id,$content,$status)
    {
        if ($status == 'create') {
            $contents = new Contents();
        }else{
            $contents = Contents::find()->where(['posts_id'=>$id])->one();
        }
        $contents->content = $contents['content'];
        $contents->posts_id =$id;
        if ($contents->save()) {
            return 1;
        }
        return 0;
    }
    public function actions()
    {
        return [
            'upload' => [
                'class' => 'kucha\ueditor\UEditorAction',
                'config' => [
                                "imageUrlPrefix"  => "http://localhost/",//图片访问路径前缀
                                "imagePathFormat" => "upload/image/{yyyy}{mm}{dd}/{time}{rand:6}", //上传保存路径
                              //  "imageRoot" => Yii::getAlias("@common"),
                            ],
            ]
        ];
    }
}
