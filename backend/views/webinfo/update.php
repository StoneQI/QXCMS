<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Webinfo */

$this->title = '修改网站信息: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '网站信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="webinfo-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
