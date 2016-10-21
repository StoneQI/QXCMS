<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Files */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '文件管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="files-view">

  <!--   <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'file_url:url',
            'file_type',
           // 'file_status',
            'file_name',
            [                      // the owner name of the model
            'label' => '新建时间',
            'value' => $model->created_at,
            'format' => ['date', 'php:Y年m月d日 h:i:s'],
            ],
            [                      // the owner name of the model
            'label' => '修改时间',
            'value' => $model->updated_at,
            'format' => ['date', 'php:Y年m月d日 h:i:s'],
            ],
        ],
    ]) ?>

</div>
