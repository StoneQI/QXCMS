<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Files */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="files-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($upload_form, 'file')->fileInput() ?>

    <?= $form->field($model, 'file_type')->dropdownList(['1'=>'图片','2'=>'文档']) ?>

  <!--   <?= $form->field($model, 'file_status')->textInput() ?> -->

   <?= $form->field($model, 'file_name')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

   <!--  <?= $form->field($model, 'updated_at')->textInput() ?>
 -->
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
