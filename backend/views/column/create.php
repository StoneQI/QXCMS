<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Columns */

$this->title = 'Create Columns';
$this->params['breadcrumbs'][] = ['label' => 'Columns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
