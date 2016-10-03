<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Columns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="columns-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pid')->textInput() ?>

    <?= $form->field($model, 'column_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'column_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'column_layout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'column_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'column_content_id')->textInput() ?>

    <?= $form->field($model, 'column_content_layout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'column_sort')->textInput() ?>

    <?= $form->field($model, 'column_status')->textInput() ?>

    <?= $form->field($model, 'createtime')->textInput() ?>

    <?= $form->field($model, 'updatetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
