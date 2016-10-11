<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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
            <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">最新动态</a></li>
            <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">底部介绍</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
            	 <?= $form->field($model, 'index_img')->textInput() ?>
            	 <?= $form->field($model, 'index_imgtext')->textInput() ?>

            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
            	<?= $form->field($model, 'center_title')->textInput() ?>
            	 <?= $form->field($model, 'center_content')->textInput() ?>
            	 <?= $form->field($model, 'center_title_right')->textInput() ?>
            	 <?= $form->field($model, 'center_content_right')->textInput() ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
            	 <h3>新闻一</h3>
            	 <?= $form->field($model, 'list_img1')->textInput() ?>
            	 <?= $form->field($model, 'list_title1')->textInput() ?>
            	 <?= $form->field($model, 'list_content1')->textInput() ?>
            	 <?= $form->field($model, 'list_url1')->textInput() ?>
            	 <h3>新闻二</h3>
            	 <?= $form->field($model, 'list_img2')->textInput() ?>
            	 <?= $form->field($model, 'list_title2')->textInput() ?>
            	 <?= $form->field($model, 'list_content2')->textInput() ?>
            	 <?= $form->field($model, 'list_url2')->textInput() ?>
            	 <h3>新闻三</h3>
            	 <?= $form->field($model, 'list_img3')->textInput() ?>
            	 <?= $form->field($model, 'list_title3')->textInput() ?>
            	 <?= $form->field($model, 'list_content3')->textInput() ?>
            	 <?= $form->field($model, 'list_url3')->textInput() ?>
            	 <h3>新闻四</h3>
            	 <?= $form->field($model, 'list_img4')->textInput() ?>
            	 <?= $form->field($model, 'list_title4')->textInput() ?>
            	 <?= $form->field($model, 'list_content4')->textInput() ?>
            	 <?= $form->field($model, 'list_url4')->textInput() ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
            	 <?= $form->field($model, 'footer_left_title')->textInput() ?>
            	 <?= $form->field($model, 'footer_left_content')->textInput() ?>

            	 <?= $form->field($model, 'footer_right_title')->textInput() ?>
            	 <?= $form->field($model, 'footer_right_content')->textInput() ?>
            </div>
          </div>

        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- indexinfo-view -->
