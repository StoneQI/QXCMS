<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Columns */

$this->title = '修改栏目: ' . $model->column_name;
$this->params['breadcrumbs'][] = ['label' => '栏目管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->column_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="columns-update">

   <!--  <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
        'columns'=>$columns,
        'upload_form'=>$upload_form,
    ]) ?>

</div>
