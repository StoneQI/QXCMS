<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Files */

$this->title = '新增文件';
$this->params['breadcrumbs'][] = ['label' => '文件管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="files-create">

   <!--  <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
        'upload_form'=>$upload_form
    ]) ?>

</div>
