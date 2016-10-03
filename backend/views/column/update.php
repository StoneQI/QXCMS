<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Columns */

$this->title = 'Update Columns: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Columns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="columns-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
