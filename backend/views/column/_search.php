<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ColumnsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="columns-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pid') ?>

    <?= $form->field($model, 'column_name') ?>

    <?= $form->field($model, 'column_link') ?>

    <?= $form->field($model, 'column_layout') ?>

    <?php // echo $form->field($model, 'column_image') ?>

    <?php // echo $form->field($model, 'column_content_id') ?>

    <?php // echo $form->field($model, 'column_content_layout') ?>

    <?php // echo $form->field($model, 'column_sort') ?>

    <?php // echo $form->field($model, 'column_status') ?>

    <?php // echo $form->field($model, 'createtime') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
