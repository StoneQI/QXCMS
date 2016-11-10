<?php

use yii\helpers\Html;
use \kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */

$this->title = $model->post_tiltle;
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

<!--     <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
             [
                'attribute'=>'post_column_id',
                'label'=>'所属栏目',
                'format'=>'raw',
                'value'=>$model->column->column_name,
                'valueColOptions'=>['style'=>'width:70%'],

            ],
            'post_tiltle',
            [
                'label' => '文章地址',
                'value'=>'http://www.liyekeji.cn/post/'.$model->id,
                'format'=>['url',['target'=>'view_window']],
            ],
            'post_anthor',
            'post_origin',
            [
            'attribute' => 'post_image',
            'value'=>$model->post_image?$model->post_image:null,
            'format'=>['image']
            ],
            'post_video',
            [
                'attribute'=>'post_link',
                'format'=>['url',['target'=>'view_window']]
            ],
            'post_summarize',
            [                      // the owner name of the model
            'label' => '内容',
            'value' => $model->content?$model->content->content:'文章无内容',
            'format' => 'html',
            ],
            [
                'attribute'=>'post_is_top',
                'format'=>'raw',
                'value'=>$model->post_is_top ? '<span class="label label-success">是</span>' : '<span class="label label-danger">是</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'widgetOptions' => [
                    'pluginOptions' => [
                        'onText' => '是',
                        'offText' => '否',
                    ]
                ],
                'valueColOptions'=>['style'=>'width:30%']
            ],

            [
                'attribute'=>'post_status',
                'label'=>'状态',
                'format'=>'raw',
                'value'=>$model->post_status ? '<span class="label label-success">已发布</span>' : '<span class="label label-danger">草稿</span>',
                'type'=>DetailView::INPUT_SWITCH,
                'widgetOptions' => [
                    'pluginOptions' => [
                        'onText' => '已发布',
                        'offText' => '草稿',
                    ]
                ],
                'valueColOptions'=>['style'=>'width:30%']
            ],
           // 'post_is_top',
           // 'post_column_id',
           // 'post_status',
           //'post_tag_id',
            [                      // the owner name of the model
            'label' => '新建时间',
            'value' => $model->created_at,
            'format' => ['date', 'php:Y年m月d日 h:i:s'],
            ],
            [                      // the owner name of the model
            'label' => '修改时间',
            'value' => $model->updated_at,
            'format' => ['date', 'php:Y年m月d日 h:i:s'],
            ],
           // 'created_at:datetime',
           // 'updated_at:datetime',
        ],
        'bootstrap'=>true,
       // 'bordered' => true,
        //'striped' => true,
        //'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'buttons1'=>'',
        'panel' => [
            'type' =>DetailView::TYPE_PRIMARY,
            'heading'=>$this->title ,

            // 'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> 新建栏目', ['create'], ['class' => 'btn btn-success']),
        ],
    ]) ?>

</div>
