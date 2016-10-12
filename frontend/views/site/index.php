<?php

use common\models\Indexinfo;
/* @var $this yii\web\View */

$this->title = '首页';

$indexinfo = Indexinfo::getinfo();

?>
<div id="contents">
        <div id="adbox">
            <div class="clearfix">
            <img src="<?= $indexinfo->index_img ?>" alt="Img" height="382" width="594">
                <div class="detail">
                    <h1> <?= $indexinfo->index_imgtext ?></h1>
                </div>
            </div>
        </div>
        <div class="highlight">
            <div class="clearfix">
                <div class="testimonial">
                    <h2><?= $indexinfo->center_title_right ?></h2>
                    <p>
                        &ldquo;<?= $indexinfo->center_content_right ?>&rdquo;
                    </p>
                </div>
                <h1><?= $indexinfo->center_title ?></h1>
                <p>
                    <?= $indexinfo->center_content ?>
                </p>
            </div>
        </div>
        <div class="featured">
            <h2>最新动态</h2>
            <ul class="clearfix">
                <li>
                    <div class="frame1">
                        <div class="box">
                            <img src="<?= $indexinfo->list_img1 ?>" alt="Img" height="130" width="197">
                        </div>
                    </div>
                    <p>
                        <a href="<?= $indexinfo->list_url1 ?>" ><b><?= $indexinfo->list_title1 ?></b></a><?= $indexinfo->list_content1 ?>
                    </p>
                    <a href="<?= $indexinfo->list_url1 ?>" class="more">点击阅读</a>
                </li>
                               <li>
                    <div class="frame1">
                        <div class="box">
                            <img src="<?= $indexinfo->list_img2 ?>" alt="Img" height="130" width="197">
                        </div>
                    </div>
                    <p>
                        <a href="<?= $indexinfo->list_url2 ?>" ><b><?= $indexinfo->list_title2 ?></b></a><?= $indexinfo->list_content2 ?>
                    </p>
                    <a href="<?= $indexinfo->list_url2 ?>" class="more">点击阅读</a>
                </li>
                                <li>
                    <div class="frame1">
                        <div class="box">
                            <img src="<?= $indexinfo->list_img3 ?>" alt="Img" height="130" width="197">
                        </div>
                    </div>
                    <p>
                        <a href="<?= $indexinfo->list_url3 ?>" ><b><?= $indexinfo->list_title3 ?></b></a><?= $indexinfo->list_content3 ?>
                    </p>
                    <a href="<?= $indexinfo->list_url3 ?>" class="more">点击阅读</a>
                </li>
                                <li>
                    <div class="frame1">
                        <div class="box">
                            <img src="<?= $indexinfo->list_img4 ?>" alt="Img" height="130" width="197">
                        </div>
                    </div>
                    <p>
                        <a href="<?= $indexinfo->list_url4 ?>" ><b><?= $indexinfo->list_title4 ?></b></a><?= $indexinfo->list_content4 ?>
                    </p>
                    <a href="<?= $indexinfo->list_url4 ?>" class="more">点击阅读</a>
                </li>
            </ul>
        </div>
    </div>
