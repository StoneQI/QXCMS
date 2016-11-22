<?php

use common\models\Indexinfo;
/* @var $this yii\web\View */

$this->title = '首页';

$indexinfo = Indexinfo::getinfo();
$post=\backend\models\Posts::getIndexShow();
?>
<div id="contents">
        <div id="adbox">
            <div class="clearfix">
            <img src="<?= $indexinfo->index_img ?>" alt="Img" height="382" width="594">
                <div class="detail">
                    <h1> <?= nl2br($indexinfo->index_imgtext) ?></h1>
                </div>
            </div>
        </div>
        <div class="highlight">
            <div class="clearfix">
                <div class="testimonial">
                    <h2><?= $indexinfo->center_title_right ?></h2>
                    <p>
                        &ldquo;<?= nl2br($indexinfo->center_content_right) ?>&rdquo;
                    </p>
                </div>
                <h1><?= $indexinfo->center_title ?></h1>
                <p>
                    <?= nl2br($indexinfo->center_content) ?>
                </p>
            </div>
        </div>
        <div class="featured">
            <h2>最新动态</h2>
            <ul class="clearfix">
            <?php
                foreach ($post as $key => $value) {
            ?>
                <li>
                    <div class="frame1">
                        <div class="box">
                            <img src="<?= $value->post_image ?>" alt="Img" height="130" width="197">
                        </div>
                    </div>
                    <p >
                        <a href="<?= \Yii::$app->params['assets_path'].'post/'.$value->id ?>" ><b><?= $value->post_tiltle ?></b></a><?= $value->post_summarize ?>
                    </p>
                    <a href="<?= \Yii::$app->params['assets_path'].'post/'.$value->id ?>" class="more">点击阅读</a>
                </li>

            <?php
                }
             ?>
            </ul>
        </div>
    </div>
