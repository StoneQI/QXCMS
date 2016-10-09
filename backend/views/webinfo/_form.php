<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Webinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="webinfo-form">

    <?php $form = ActiveForm::begin(); ?>

   <!--  <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'web_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'record_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'web_address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton( '修改', ['class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
