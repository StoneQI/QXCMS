<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Labor */

$this->title = '新增劳务';
$this->params['breadcrumbs'][] = ['label' => '劳务信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labor-create">

    <?= $this->render('_form', [
        'model' => $model,
        'upload_form'=>$upload_form
    ]) ?>

</div>
