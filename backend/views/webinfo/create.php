<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Webinfo */

$this->title = 'Create Webinfo';
$this->params['breadcrumbs'][] = ['label' => 'Webinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="webinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
