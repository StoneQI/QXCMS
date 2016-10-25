<?php

use yii\helpers\Html;
use \kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contacts */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '留言', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-view">

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->Id], [
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
        //    'Id',
            'name',
            'phone',
            'address',
            'content:ntext',
            [
            'attribute'=>'created_at',
            'format' => ['date', 'php:Y年m月d日 h:i:s'],
            ],
            [
                'attribute'=>'status',
                'label'=>'是否已读',
                'format'=>'raw',
                'value'=>$model->status ? '<span class="label label-success">已读</span>' : '<span class="label label-danger">未读</span>',
                ],
        ],
    ]) ?>

</div>
