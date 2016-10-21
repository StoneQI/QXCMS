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
            'technician',
            'license_number',
            'address',
            'phone',
            'remarks',
           // 'status',
        ],
    ]) ?>

</div>
