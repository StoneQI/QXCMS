<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;
use backend\models\Columns;
/* @var $this yii\web\View */
/* @var $model backend\models\Columns */

$this->title = $model->column_name;
$this->params['breadcrumbs'][] = ['label' => '栏目', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-view">

    <p>
      <?= Html::a('<i class="glyphicon glyphicon-plus"></i> 新增栏目', ['create'], ['class' => 'btn btn-success'])?>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除此栏目?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
             ['attribute'=>'pid',
                'label'=>'上级栏目',
                'format'=>'raw',
                'value'=>Columns::find()->where(['id'=>$model->pid])->one()->column_name
            ],

            [
            'attribute' => 'column_name',
            'value'=>$model->column_name?$model->column_name:null,
            ],
            [
            'attribute' => 'column_link',
            'value'=>$model->column_link?$model->column_link:null,
            'format'=>['url',['target'=>'view_window']]
            ],
           // 'column_layout',
            [
                'attribute'=>'column_layout',
                'value'=>ArrayHelper::getValue(['list'=>'新闻中心','img_list'=>'产品展示','SGP-aboutus'=>'单页布局--关于我们','cooperate'=>'单页布局--合作平台'], $model->column_layout)
            ],
            [
            'attribute' => 'column_image',
            'value'=>$model->column_image?$model->column_image:null,
            'format'=>['image']
            ],
            [
            'attribute' => 'column_content',
            'value'=>$model->column_content?$model->column_content:null,
             'format'=>['html']
            ],
            //'column_content_layout',
            [
                'attribute'=>'column_content_layout',
                'value'=>ArrayHelper::getValue(['1'=>'默认'], $model->column_content_layout)
            ],

            'column_sort',
  //          'column_status',
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
        ],
    ]) ?>

</div>
