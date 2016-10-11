<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model common\models\IndexInfo */
/* @var $form ActiveForm */
?>
<div class="indexinfo-view">
    <p>
        <?= Html::a('修改', ['update'], ['class' => 'btn btn-primary']) ?>
    </p>
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
      <?= DetailView::widget([
          'model' => $model,
          'attributes' => [
           //   'id',
            [     'attribute'=>'index_img',
                  'label'=>'首页大图',
                  'valueColOptions'=>['style'=>'width:70%'],
              ],
              [
                  'attribute'=>'index_imgtext',
                  'label'=>'大图内容',
              ]
          ],
      ]) ?>

  </div>
  <div role="tabpanel" class="tab-pane" id="profile">...</div>
  <div role="tabpanel" class="tab-pane" id="messages">...</div>
  <div role="tabpanel" class="tab-pane" id="settings">...</div>
</div>


</div><!-- indexinfo-view -->
