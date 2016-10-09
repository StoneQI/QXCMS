<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Files */

$this->title = '修改文件: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '文件', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="files-update">

   <!--  <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
