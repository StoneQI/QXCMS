<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ColumnsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Columns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Columns', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pid',
            'column_name',
            'column_link',
            'column_layout',
            // 'column_image',
            // 'column_content_id',
            // 'column_content_layout',
            // 'column_sort',
            // 'column_status',
            // 'createtime:datetime',
            // 'updatetime:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
