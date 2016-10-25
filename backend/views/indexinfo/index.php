<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model common\models\IndexInfo */
/* @var $form ActiveForm */
$this->title = '网站配置';
$this->params['breadcrumbs'][] = ['label' => '首页管理', 'url' => ['index']];
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
                  'format'=>['image']
              ],
              [
                  'attribute'=>'index_imgtext',
                  'label'=>'大图内容',
              ]
          ],
      ]) ?>

  </div>
  <div role="tabpanel" class="tab-pane" id="profile">
    <?= DetailView::widget([
        'model' => $model,
          'attributes' => [
           //   'id',
            [     'attribute'=>'center_title',
                  'label'=>'推荐标题',
                  'valueColOptions'=>['style'=>'width:70%'],
              ],
              [
                  'attribute'=>'center_content',
                  'label'=>'推荐内容',
              ],
             [
                  'attribute'=>'center_title_right',
                  'label'=>'热门标题',
              ],
              [
                  'attribute'=>'center_content_right',
                  'label'=>'热门内容',
              ]
          ],
    ]) ?>
  </div>
  <div role="tabpanel" class="tab-pane" id="messages">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         //   'id',
          [     'attribute'=>'list_img1',
                'label'=>'文章一图片',
                'valueColOptions'=>['style'=>'width:70%'],
                'format'=>['image']
            ],
            [
                'attribute'=>'list_title1',
                'label'=>'文章一标题',
            ],
           [
                'attribute'=>'list_content1',
                'label'=>'文章一内容',
            ],
            [
                'attribute'=>'list_url1',
                'label'=>'文章一链接',
                'format'=>['url',['target'=>'view_window']]
            ],
            [    'attribute'=>'list_img2',
                'label'=>'文章二图片',
                'valueColOptions'=>['style'=>'width:70%'],
                'format'=>['image']
            ],
            [
                'attribute'=>'list_title2',
                'label'=>'文章二标题',
            ],
           [
                'attribute'=>'list_content2',
                'label'=>'文章二内容',
            ],
            [
                'attribute'=>'list_url2',
                'label'=>'文章二链接',
                'format'=>['url',['target'=>'view_window']]
            ],
                      [     'attribute'=>'list_img3',
                'label'=>'文章三图片',
                'valueColOptions'=>['style'=>'width:70%'],
                'format'=>['image']
            ],
            [
                'attribute'=>'list_title3',
                'label'=>'文章三标题',
            ],
           [
                'attribute'=>'list_content3',
                'label'=>'文章三内容',
            ],
            [
                'attribute'=>'list_url3',
                'label'=>'文章三链接',
                'format'=>['url',['target'=>'view_window']]
            ],
                       [     'attribute'=>'list_img4',
                 'label'=>'文章四图片',
                 'valueColOptions'=>['style'=>'width:70%'],
                 'format'=>['image']
             ],
             [
                 'attribute'=>'list_title4',
                 'label'=>'文章四标题',
             ],
            [
                 'attribute'=>'list_content4',
                 'label'=>'文章四内容',
             ],
             [
                 'attribute'=>'list_url4',
                 'label'=>'文章四链接',
                 'format'=>['url',['target'=>'view_window']]
             ]
        ],
    ]) ?>
  </div>
  <div role="tabpanel" class="tab-pane" id="settings">
    <?= DetailView::widget([
          'model' => $model,
          'attributes' => [
           //   'id',
            [     'attribute'=>'footer_left_title',
                  'label'=>'底部右侧标题',
                  'valueColOptions'=>['style'=>'width:70%'],
              ],
              [
                  'attribute'=>'footer_left_content',
                  'label'=>'底部右侧内容',
              ],
             [
                  'attribute'=>'footer_right_title',
                  'label'=>'底部左侧标题',
              ],
              [
                  'attribute'=>'footer_right_content',
                  'label'=>'底部左侧内容',
              ]
          ],
      ]) ?>
  </div>
</div>


</div><!-- indexinfo-view -->
