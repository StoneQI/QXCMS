<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Labor;
/* @var $this yii\web\View */
/* @var $searchModel common\models\LaborSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use frontend\assets\AppAsset;

AppAsset::register($this);
$this->title = '劳务信息';
?>
<br>
<div class="container">
<br>
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
            [
                'attribute'=>'technician',
                'value'=>function ($model, $key, $index, $widget) {
                    return Html::a('点击查看技工证','#',['onclick'=>'BootstrapDialog.show({title: "技工证",message: \'<img src="'.$model->technician.'">\',buttons: [{label: "关闭", action: function(dialogItself){dialogItself.close(); } }]});']);
    },
            'format'=>'raw',
            ],
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
            'type' => GridView::TYPE_SUCCESS,
            'heading'=>$this->title
        ],
    ]); ?>
</div>
</div>
<div class="container">
<h3 class="alert alert-danger text-center">更多信息请联系我们</h3>
</div>

