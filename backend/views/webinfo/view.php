<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Webinfo */

$this->title = '网站信息';
$this->params['breadcrumbs'][] = ['label' => '网站信息', 'url' => ['index']];
?>
<div class="webinfo-view">


    <p>
        <?= Html::a('修改', ['update'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         //   'id',
          [     'attribute'=>'web_name',
                'label'=>'网站名字',
                'valueColOptions'=>['style'=>'width:70%'],
            ],
            [
                'attribute'=>'web_logo',
                'label'=>'网站LOGO',
                 'value'=>$model->web_logo?$model->web_logo:null,
                'format'=>['image']
            ],
                        [
                'attribute'=>'record_id',
                'label'=>'备案号',
            ],
                        [
                'attribute'=>'web_phone',
                'label'=>'网站电话',
            ],
                        [
                'attribute'=>'web_mail',
                'label'=>'网站邮箱',
            ],
                    [
                'attribute'=>'web_address',
                'label'=>'网站地址',
            ]
        ],
    ]) ?>

</div>
