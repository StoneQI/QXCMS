<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = $columns->column_name;
$this->params['breadcrumbs'][] = $this->title;
?>
	<div id="contents">
		<div class="clearfix">
			<h1>关于我们</h1>
			<div class="frame2">
				<div class="box">
					<img src="<?= $columns->column_image ?>" alt="Img" height="298" width="924">
				</div>
			</div>
			<?= $columns->column_content ?>
		</div>
	</div>

