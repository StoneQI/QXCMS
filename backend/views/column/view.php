<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Columns;
/* @var $this yii\web\View */
/* @var $model backend\models\Columns */

$this->title = $model->column_name;
$this->params['breadcrumbs'][] = ['label' => '栏目', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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


            'column_name',
            'column_link',
            'column_layout',
            'column_image',
            'column_content:html',
            'column_content_layout',
            'column_sort',
  //          'column_status',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
