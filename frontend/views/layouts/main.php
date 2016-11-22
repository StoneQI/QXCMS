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


$indexinfo = Indexinfo::getinfo();
CommonAsset::register($this);
$web_config = Webinfo::getinfo();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="baidu-site-verification" content="JXMWB8bHEA" />
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
                <a href="web.html"><img src="<?= $web_config->web_logo ?>" alt="LOGO" height="52" width="320"></a>
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
                    <?= nl2br($indexinfo->footer_left_content) ?>
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
                <p>
                    <span>备案号:</span> <?= Html::encode($web_config->record_id) ?>
                </p>
            </div>
            <div class="section">
                <h4><?= $indexinfo->footer_right_title ?></h4>
                <p>
                    <?= nl2br($indexinfo->footer_right_content) ?>
                </p>
                <a href="<?=Url::toRoute(['site/contact']); ?>" class="subscribe">联系我们</a>
            </div>
        </div>
        <div id="footnote">
            <div class="clearfix">
                <div class="connect">
                </div>
                <p>
                     &copy; 2016.潍坊千行信息科技提供技术支持.<a target="_blank" href="http://www.qianxingit.cn/"></a>
                </p>
            </div>
        </div>
    </div>


<!-- 代码部分begin -->
<div class="side">
    <ul>
        <li><a href="<?=Url::toRoute(['site/contact']); ?>"><div class="sidebox"><img src="<?= \Yii::$app->params['assets_path']?>images/side_icon01.png">联系我们</div></a></li>
<!--        <li><a href="#"><div class="sidebox"><img src="http://demo.lanrenzhijia.com/2014/service1108/side_icon02.png">客户案例</div></a></li>-->
        <li><a href="http://wpa.qq.com/msgrd?v=3&uin=2790768494&site=qq&menu=yes" ><div class="sidebox"><img src="<?= \Yii::$app->params['assets_path']?>images/side_icon04.png">QQ客服</div></a></li>
<!--        <li><a href="javascript:void(0);" ><div class="sidebox"><img src="http://demo.lanrenzhijia.com/2014/service1108/side_icon03.png">新浪微博</div></a></li>-->
        <li style="border:none;"><a href="javascript:goTop();" class="sidetop"><img src="<?= \Yii::$app->params['assets_path']?>images/side_icon05.png"></a></li>
    </ul>
</div>
<script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
<script>
    $(function(){
        $(".side ul li").hover(function(){
            $(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"})
        },function(){
            $(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})
        });
    });
    //回到顶部函数
    function goTop(){
        $('html,body').animate({'scrollTop':0},300);
    }
</script>
<!-- 代码部分end -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
