<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use backend\models\Columns;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ColumnsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '栏目管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-index">

<!--     <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'export'=>false,
        'columns' => [
            [
            'class' => 'kartik\grid\SerialColumn'],
            'column_name',

            [
                'attribute' => 'pid',
                'group' => true,

               // 'enableRowClick' => true,
                'value' => function ($model, $key, $index) {
                             $column =  Columns::findOne($key);
                             $column =Columns::findOne($column->pid);

                             return $column->column_name;
                            },
               // 'detail'=>function ($model, $key, $index, $column){},
            ],
            [
            'attribute' => 'column_link',
            'format'=>['url',['target'=>'view_window']]
            ],
            [
              'attribute'=>'column_layout',
              'value'=>function($model, $key, $index){
                $content = array('list'=>'新闻中心','img_list'=>'产品展示','SGP-aboutus'=>'单页布局--关于我们','cooperate'=>'单页布局--合作平台');
                return $content[$model->column_layout];
              }],
            // 'column_image',
            // 'column_content_id',
            [
              'attribute'=>'column_content_layout',
              'value'=>function($model, $key, $index){
                $content = array('1'=>'默认');
                return $content[$model->column_content_layout];
              }],
            'column_sort',
            // 'createtime:datetime',
            // 'updatetime:datetime',

            ['class' => 'kartik\grid\ActionColumn',
                'width' => '50'
            ],
        ],
        'containerOptions' => ['style'=>'overflow: auto'],
        'pjax' => false,
        'resizableColumns'=>true,
        'bordered' => true,
        'striped' => true,
        'toolbar' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading'=>$this->title ,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> 新建栏目', ['create'], ['class' => 'btn btn-success']),
        ],
    ]); ?>
</div>
