<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */

$this->title = '修改文章: ' . $model->post_tiltle;
$this->params['breadcrumbs'][] = ['label' => '文章管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_tiltle, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="posts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'columns' =>$columns,
        'contents' =>$contents,
        'upload_form'=>$upload_form
    ]) ?>

</div>
