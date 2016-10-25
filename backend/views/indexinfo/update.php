<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '首页管理';
$this->params['breadcrumbs'][] = ['label' => '首页管理', 'url' => ['index']];
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
            <br>
            	 <?= $form->field($model, 'index_img')->textInput(['maxlength' => true,'value'=>$indexinfo->index_img])->label('首页大图（请先在文件管理功能里取得图片地址复制到此）') ?>
            	 <?= $form->field($model, 'index_imgtext')->textInput(['maxlength' => true,'value'=>$indexinfo->index_imgtext]) ?>

            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
            <br>
            	<?= $form->field($model, 'center_title')->textInput(['maxlength' => true,'value'=>$indexinfo->center_title]) ?>
            	 <?= $form->field($model, 'center_content')->textInput(['maxlength' => true,'value'=>$indexinfo->center_content]) ?>
            	 <?= $form->field($model, 'center_title_right')->textInput(['maxlength' => true,'value'=>$indexinfo->center_title_right]) ?>
            	 <?= $form->field($model, 'center_content_right')->textInput(['maxlength' => true,'value'=>$indexinfo->center_content_right]) ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                 <h3><b>文章一</b></h3>
            	 <?= $form->field($model, 'list_img1')->textInput(['maxlength' => true,'value'=>$indexinfo->list_img1])->label('文章一图片（请先在文件管理功能里取得图片地址复制到此）') ?>
            	 <?= $form->field($model, 'list_title1')->textInput(['maxlength' => true,'value'=>$indexinfo->list_title1]) ?>
            	 <?= $form->field($model, 'list_content1')->textInput(['maxlength' => true,'value'=>$indexinfo->list_content1]) ?>
            	 <?= $form->field($model, 'list_url1')->textInput(['maxlength' => true,'value'=>$indexinfo->list_url1])->label('文章一地址（请先在文章管理功能里取得文章地址复制到此）') ?>
            	 <h3><b>文章二</b></h3>
            	 <?= $form->field($model, 'list_img2')->textInput(['maxlength' => true,'value'=>$indexinfo->list_img2])->label('文章二图片（请先在文件管理功能里取得图片地址复制到此）') ?>
            	 <?= $form->field($model, 'list_title2')->textInput(['maxlength' => true,'value'=>$indexinfo->list_title2]) ?>
            	 <?= $form->field($model, 'list_content2')->textInput(['maxlength' => true,'value'=>$indexinfo->list_content2]) ?>
            	 <?= $form->field($model, 'list_url2')->textInput(['maxlength' => true,'value'=>$indexinfo->list_url2])->label('文章二地址（请先在文章管理功能里取得文章地址复制到此）') ?>
            	 <h3><b>文章三</b></h3>
            	 <?= $form->field($model, 'list_img3')->textInput(['maxlength' => true,'value'=>$indexinfo->list_img3])->label('文章三图片（请先在文件管理功能里取得图片地址复制到此）') ?>
            	 <?= $form->field($model, 'list_title3')->textInput(['maxlength' => true,'value'=>$indexinfo->list_title3]) ?>
            	 <?= $form->field($model, 'list_content3')->textInput(['maxlength' => true,'value'=>$indexinfo->list_content3]) ?>
            	 <?= $form->field($model, 'list_url3')->textInput(['maxlength' => true,'value'=>$indexinfo->list_url3])->label('文章三地址（请先在文章管理功能里取得文章地址复制到此）') ?>
            	 <h3><b>文章四</b></h3>
            	 <?= $form->field($model, 'list_img4')->textInput(['maxlength' => true,'value'=>$indexinfo->list_img4])->label('文章四图片（请先在文件管理功能里取得图片地址复制到此）') ?>
            	 <?= $form->field($model, 'list_title4')->textInput(['maxlength' => true,'value'=>$indexinfo->list_title4]) ?>
            	 <?= $form->field($model, 'list_content4')->textInput(['maxlength' => true,'value'=>$indexinfo->list_content4]) ?>
            	 <?= $form->field($model, 'list_url4')->textInput(['maxlength' => true,'value'=>$indexinfo->list_url4])->label('文章四地址（请先在文章管理功能里取得文章地址复制到此）') ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings"><br>
            	 <?= $form->field($model, 'footer_left_title')->textInput(['maxlength' => true,'value'=>$indexinfo->footer_left_title]) ?>
            	 <?= $form->field($model, 'footer_left_content')->textInput(['maxlength' => true,'value'=>$indexinfo->footer_left_content]) ?>

            	 <?= $form->field($model, 'footer_right_title')->textInput(['maxlength' => true,'value'=>$indexinfo->footer_right_title]) ?>
            	 <?= $form->field($model, 'footer_right_content')->textInput(['maxlength' => true,'value'=>$indexinfo->footer_right_content]) ?>
            </div>
          </div>

        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- indexinfo-view -->
