<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Labor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="labor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropdownList(['男'=>'男','女'=>'女']) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'species')->textInput(['maxlength' => true]) ?>

    <?= Html::label('技工证') ?><br>
    <?php echo $model->technician?Html::img($model->technician, ['alt' => '技工证']):"" ?>
    <?= $form->field($upload_form, 'file')->fileInput()->label('') ?>

    <?= $form->field($model, 'license_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textarea() ?>

   <!--  <?= $form->field($model, 'status')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
