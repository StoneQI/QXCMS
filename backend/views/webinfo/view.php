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
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'web_name',
            'web_logo',
            'record_id',
            'web_phone',
            'web_mail',
            'web_address',
        ],
    ]) ?>

</div>
