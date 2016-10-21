<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Labor */

$this->title = '修改劳务信息: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '劳务信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="labor-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
