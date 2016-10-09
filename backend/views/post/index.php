<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
use kartik\date\DatePicker;
use backend\models\Columns;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <!-- //<h1><?= Html::encode($this->title) ?></h1> -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'export'=>false,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

           // 'id',
           [
                'attribute' => 'post_column_id',
                'format'=>'raw',
                'width'=>'15%',
                'value'=>function ($model, $key, $index, $widget) {
                    return Html::label($model->column->column_name);
                },
                'filterType'=>GridView::FILTER_SELECT2,
                'filter'=>ArrayHelper::map(Columns::find()->orderBy('column_name')->asArray()->all(), 'id', 'column_name'),
                'filterWidgetOptions'=>[
                    'pluginOptions'=>['allowClear'=>true],
                ],
                'filterInputOptions'=>['placeholder'=>'选择栏目'],
           ],
            [
                'attribute' => 'post_tiltle',
                'width'=>'20%',
            ],
            [
                'attribute' => 'post_subtitle',
                'width'=>'15%',
            ],
            [
                'attribute' => 'post_anthor',
                'width'=>'15%',
            ],
            //'post_subtitle',
            //'post_image',
           // 'post_video',
            // 'post_link',
            //'post_anthor',
            // 'post_origin',
             [
             'class'=>'kartik\grid\BooleanColumn',
             'attribute'=>'post_is_top',
             'vAlign'=>'middle',
             'width'=>'10%',
             'trueLabel' => '已置顶',
             'falseLabel' => '未置顶'
             ],
            // 'post_column_id',
             [
             'class'=>'kartik\grid\BooleanColumn',
             'attribute'=>'post_status',
             'vAlign'=>'middle',
             'width'=>'10%',
             'trueLabel' => '已发布',
             'falseLabel' => '草稿'
             ],
            'post_sort',
            // 'created_at:datetime',
             //'updated_at:datetime',
             // [
             //         //'class' => '\kartik\grid\DataColumn',
             //         'format'=>['date', 'php:Y年m月d日'],
             //         'attribute' => 'created_at',
             //         'filterType' => GridView::FILTER_DATE,
             //         'width'=>'80px'
             //     ],
             // [
             //        // 'class' => '\kartik\grid\DataColumn',
             //        //'class'=>'kartik\grid\EditableColumn',
             //         'format'=>['date', 'php:Y年m月d日'],
             //         //'xlFormat'=>"php:Unix",
             //         'attribute' => 'updated_at',
             //         'filterType' => GridView::FILTER_DATE,
             //         //'width'=>'80px',
             //         'filterWidgetOptions' => [
             //                // 'type' => DatePicker::TYPE_INPUT,
             //                //'form'=>'php:U',
             //                // 'convertFormat'=>true,
             //                'value'=>time(),
             //                 'pluginOptions' => [
             //                     'autoclose'=>true,
             //                     // 'format' => 'dd-M-yyyy',
             //                     //'saveFormat' => 'php:U'
             //                 ]

             //                 //
             //             ]
             //     ],

            ['class' => 'yii\grid\ActionColumn'],
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
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> 新建文章', ['create'], ['class' => 'btn btn-success']),
        ],

    ]); ?>
</div>
