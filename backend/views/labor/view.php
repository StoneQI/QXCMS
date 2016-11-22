<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Labor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '劳工信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labor-view">


    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> 新增劳务', ['create'], ['class' => 'btn btn-success'])?>
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
           // 'Id',
            'name',
            'sex',
            'age',
            'species',
            //'technician',
            [
            'attribute' => 'technician',
            'value'=>$model->technician?$model->technician:null,
            'format'=>['image']
            ],
            'license_number',
            'address',
            'phone',
            'remarks',
           // 'status',
        ],
    ]) ?>

</div>
