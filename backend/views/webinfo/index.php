<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WebinfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Webinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="webinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Webinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'web_name',
            'web_logo',
            'record_id',
            'web_phone',
            // 'web_mail',
            // 'web_address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
