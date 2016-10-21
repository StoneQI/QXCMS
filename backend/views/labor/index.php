<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Labor;
/* @var $this yii\web\View */
/* @var $searchModel common\models\LaborSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '劳务信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="labor-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'export'=>false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'Id',
          //  'species',
            [
                 'attribute' => 'species',
                 'format'=>'raw',
                 'vAlign'=>'middle',
                 'width'=>'15%',
                 'value'=>function ($model, $key, $index, $widget) {
                     return Html::label($model->species);
                 },
                 'filterType'=>GridView::FILTER_SELECT2,
                 'filter'=>ArrayHelper::map(Labor::find()->orderBy('species')->asArray()->all(), 'species', 'species'),
                 'filterWidgetOptions'=>[
                     'pluginOptions'=>['allowClear'=>true],
                 ],
                 'filterInputOptions'=>['placeholder'=>'选择工种'],
            ],
            'name',
            'sex',
            'age',

            // 'technician',
            // 'license_number',
            // 'address',
            // 'phone',
            // 'remarks',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'containerOptions' => ['style'=>'overflow: auto'],
        'pjax' => false,
        'resizableColumns'=>true,
        'bordered' => true,
        'striped' => true,
        'toolbar' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
        'showPageSummary' => false,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading'=>$this->title ,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> 新增劳务', ['create'], ['class' => 'btn btn-success']),
        ],
    ]); ?>
</div>
