<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\CommonAsset;
use common\widgets\Alert;
use backend\models\Columns;
use common\models\Webinfo;
//AppAsset::register($this);
CommonAsset::register($this);


$web_config = Webinfo::getinfo();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($web_config->web_name) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div id="header">
        <div class="clearfix">
            <div class="logo">
                <a href="web.html"><img src="images/logo.png" alt="LOGO" height="52" width="320"></a>
            </div>

            <ul class="navigation">
            <?php
              $columns = Columns::find()->where(['pid'=>1])->all();

              foreach ($columns as $key => $value) {
               // var_dump($value);

            ?>
                <li class="active">
                    <a href="web.html"><?php echo $value->column_name; ?></a>
                </li>
            <?php  }?>
                <li>
                    <a href="about.html">关于我们</a>
                </li>
                <li>
                    <a href="practices.html">产品展示</a>
                </li>
                <li>
                    <a href="lawyers.html">新闻中心</a>
                </li>
                <li>
                    <a href="lawyers.html">合作平台</a>
                </li>
                <li>
                    <a href="lawyers.html">人力资源</a>
                </li>
                <li>
                    <a href="news.html">新闻中心</a>
                    <div>
                        <a href="singlepost.html">News Single Post</a>
                    </div>
                </li>
                <li>
                    <a href="contact.html">联系我们</a>
                </li>
            </ul>
        </div>
    </div>
        <?= $content ?>
        <div id="footer">
        <div class="clearfix">
            <div class="section">
                <h4>测试文字测试文字测试文字测试文字</h4>
                <p>
                    测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字
                </p>
            </div>
            <div class="section contact">
                <h4>联系我们</h4>
                <p>
                    <span>地址:</span> <?= Html::encode($web_config->web_address) ?>
                </p>
                <p>
                    <span>电话:</span><?= Html::encode($web_config->web_phone) ?>
                </p>
                <p>
                    <span>邮箱:</span> <?= Html::encode($web_config->web_mail) ?>
                </p>
            </div>
            <div class="section">
                <h4>反馈建议</h4>
                <p>
                    测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字测试文字
                </p>
                <a href="http://sc.chinaz.com/" class="subscribe">发送邮件</a>
            </div>
        </div>
        <div id="footnote">
            <div class="clearfix">
                <div class="connect">
                    <a href="http://sc.chinaz.com/" class="facebook"></a><a href="http://sc.chinaz.com/" class="twitter"></a><a href="http://sc.chinaz.com/" class="googleplus"></a><a href="http://sc.chinaz.com/" class="pinterest"></a>
                </div>
                <p>
                    Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://www.qianxingit.cn/"></a>
                </p>
            </div>
        </div>
    </div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
