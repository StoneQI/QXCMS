<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Posts */

$this->title = '新建文章';
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'columns' =>$columns,
        'contents' =>$contents,
        'upload_form'=>$upload_form
    ]) ?>

</div>
