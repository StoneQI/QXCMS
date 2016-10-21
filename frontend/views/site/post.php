<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = $post->post_tiltle;

?>
<div id="contents">
        <div class="clearfix">

                <h1 ><?= $post->post_tiltle ?></h1>
                <p class="hrrr">作者:<?php echo $post->post_anthor?$post->post_anthor:'佚名' ?>&nbsp;&nbsp;来源:<?php echo $post->post_origin?$post->post_origin:'原创' ?></p>
                <p>
                    <?= $post->content->content ?>
                </p>
            </div>

    </div>
