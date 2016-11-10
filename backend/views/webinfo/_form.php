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


        <?= Html::label('企业LOGO(图片大小为：320（宽）*52（高）)') ?><br>
        <?php echo $webinfo->web_logo?Html::img($webinfo->web_logo, ['alt' => '企业LOGO','width'=>'320','height'=>'50']):"" ?>
        <?= $form->field($upload_form, 'file')->fileInput()->label('') ?>


    <?= $form->field($model, 'record_id')->textInput(['maxlength' => true,'value'=>$webinfo->record_id]) ?>

    <?= $form->field($model, 'web_phone')->textInput(['maxlength' => true,'value'=>$webinfo->web_phone]) ?>

    <?= $form->field($model, 'web_mail')->textInput(['maxlength' => true,'value'=>$webinfo->web_mail]) ?>

    <?= $form->field($model, 'web_address')->textInput(['maxlength' => true,'value'=>$webinfo->web_address]) ?>

    <div class="form-group">
        <?= Html::submitButton( '修改', ['class' =>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
