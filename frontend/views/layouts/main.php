<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\Columns;
use frontend\assets\CommonAsset;
use common\models\Webinfo;
use common\models\Indexinfo;
/* @var $this yii\web\View */
use frontend\assets\AppAsset;

AppAsset::register($this);

$indexinfo = Indexinfo::getinfo();
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
    <title><?= Html::encode($web_config->web_name).'-'.$this->title ?></title>
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
            <li <?php echo '首页'==$this->title?'class="active"':'' ; ?>>
                    <a href="<?=Url::toRoute(['site/index']); ?>">首页</a>
                </li>
            <?php
              $columns = Columns::find()->where(['pid'=>1])->all();

              foreach ($columns as $key => $value) {

            ?>
                <li <?php echo $value->column_name==$this->title?'class="active"':'' ; ?> >
                    <a href="<?=Url::toRoute(['site/column', 'id' => $value->id]); ?>"><?php echo $value->column_name; ?></a>
                </li>
            <?php  }?>
                <li <?php echo '劳务信息'==$this->title?'class="active"':'' ; ?>>
                    <a href="<?=Url::toRoute(['site/labor']); ?>">劳务信息</a>
                </li>
                <li <?php echo '留言'==$this->title?'class="active"':'' ; ?>>
                    <a href="<?=Url::toRoute(['site/contact']); ?>">留言</a>
                </li>
            </ul>
        </div>
    </div>
        <?= $content ?>
        <div id="footer">
        <div class="clearfix">
            <div class="section">
                <h4><?= $indexinfo->footer_left_title ?></h4>
                <p>
                    <?= $indexinfo->footer_left_content ?>
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
                <h4><?= $indexinfo->footer_right_title ?></h4>
                <p>
                    <?= $indexinfo->footer_right_content ?>
                </p>
                <a href="<?=Url::toRoute(['site/contact']); ?>" class="subscribe">联系我们</a>
            </div>
        </div>
        <div id="footnote">
            <div class="clearfix">
                <div class="connect">
                    <a href="http://sc.chinaz.com/" class="facebook"></a><a href="http://sc.chinaz.com/" class="twitter"></a><a href="http://sc.chinaz.com/" class="googleplus"></a><a href="http://sc.chinaz.com/" class="pinterest"></a>
                </div>
                <p>
                     &copy; 2016.潍坊千行信息科技提供技术支持.<a target="_blank" href="http://www.qianxingit.cn/"></a>
                </p>
            </div>
        </div>
    </div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
