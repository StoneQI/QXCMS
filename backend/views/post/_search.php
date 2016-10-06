<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PostsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'post_tiltle') ?>

    <?= $form->field($model, 'post_subtitle') ?>

    <?= $form->field($model, 'post_image') ?>

    <?= $form->field($model, 'post_video') ?>

    <?php // echo $form->field($model, 'post_link') ?>

    <?php // echo $form->field($model, 'post_anthor') ?>

    <?php // echo $form->field($model, 'post_origin') ?>

    <?php // echo $form->field($model, 'post_is_top') ?>

    <?php // echo $form->field($model, 'post_column_id') ?>

    <?php // echo $form->field($model, 'post_status') ?>

    <?php // echo $form->field($model, 'post_tag_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
