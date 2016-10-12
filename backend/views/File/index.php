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

            //'id',
            'file_url:url',
            'file_type',
           // 'file_status',
            'file_name',
            // 'created_at',
            // 'updated_at',

               [
            'class' => 'kartik\grid\ActionColumn',
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
