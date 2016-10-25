<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Webinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="webinfo-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'web_name')->textInput(['maxlength' => true,'value'=>$webinfo->web_name]) ?>

    <?= $form->field($model, 'web_logo')->textInput(['maxlength' => true,'value'=>$webinfo->web_logo])->label('企业LOGO（请先在文件管理功能里取得图片地址复制到此）') ?>

    <?= $form->field($model, 'record_id')->textInput(['maxlength' => true,'value'=>$webinfo->record_id]) ?>

    <?= $form->field($model, 'web_phone')->textInput(['maxlength' => true,'value'=>$webinfo->web_phone]) ?>

    <?= $form->field($model, 'web_mail')->textInput(['maxlength' => true,'value'=>$webinfo->web_mail]) ?>

    <?= $form->field($model, 'web_address')->textInput(['maxlength' => true,'value'=>$webinfo->web_address]) ?>

    <div class="form-group">
        <?= Html::submitButton( '修改', ['class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
