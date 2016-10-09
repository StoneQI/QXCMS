<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Columns */

$this->title = '新建栏目';
$this->params['breadcrumbs'][] = ['label' => '栏目', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
        'columns' => $columns,
    ]) ?>

</div>
