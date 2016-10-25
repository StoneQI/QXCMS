<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FilesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文件管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="files-index">

   <!--  <h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'export'=>false,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            [
            'attribute' => 'file_url',
            'format'=>['url',['target'=>'view_window']]
            ],
            [
              'attribute'=>'file_type',
              'value'=>function($model, $key, $index){
                $content = array('1'=>'图片','2'=>'文档');
                return $content[$model->file_type];
              }],
            'file_name',

               [
            'class' => 'kartik\grid\ActionColumn',
            'updateOptions' => ['label' => ''],
             'width' => '50'],
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
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> 新增文件', ['create'], ['class' => 'btn btn-success']),
        ],
    ]); ?>
</div>
