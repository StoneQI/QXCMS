<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '首页管理';
$this->params['breadcrumbs'][] = ['label' => '首页管理', 'url' => ['update']];
/* @var $this yii\web\View */
/* @var $model common\models\IndexInfo */
/* @var $form ActiveForm */
?>
<div class="indexinfo-view">

    <?php $form = ActiveForm::begin(); ?>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">首页大图</a></li>
            <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">内容简介</a></li>
            <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">底部介绍</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
            <br>
                <?= Html::label('首页大图(图片大小为：594（宽）*382（高）)') ?><br>
                <?php echo $indexinfo->index_img?Html::img($indexinfo->index_img, ['alt' => '首页大图','width'=>'594','height'=>'382']):"" ?>
            	<?= $form->field($upload_form, 'file')->fileInput()->label('') ?>
            	<?= $form->field($model, 'index_imgtext')->textarea(['maxlength' => true,'value'=>$indexinfo->index_imgtext]) ?>

            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
            <br>
            	<?= $form->field($model, 'center_title')->textInput(['maxlength' => true,'value'=>$indexinfo->center_title]) ?>
            	 <?= $form->field($model, 'center_content')->textarea(['maxlength' => true,'value'=>$indexinfo->center_content]) ?>
            	 <?= $form->field($model, 'center_title_right')->textInput(['maxlength' => true,'value'=>$indexinfo->center_title_right]) ?>
            	 <?= $form->field($model, 'center_content_right')->textarea(['maxlength' => true,'value'=>$indexinfo->center_content_right]) ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings"><br>
            	 <?= $form->field($model, 'footer_left_title')->textInput(['maxlength' => true,'value'=>$indexinfo->footer_left_title]) ?>
            	 <?= $form->field($model, 'footer_left_content')->textarea(['maxlength' => true,'value'=>$indexinfo->footer_left_content]) ?>

            	 <?= $form->field($model, 'footer_right_title')->textInput(['maxlength' => true,'value'=>$indexinfo->footer_right_title]) ?>
            	 <?= $form->field($model, 'footer_right_content')->textarea(['maxlength' => true,'value'=>$indexinfo->footer_right_content]) ?>
            </div>
          </div>

        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- indexinfo-view -->
