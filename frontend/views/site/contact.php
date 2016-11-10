<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
$this->title = '留言';
?>
<div class="container text-center">


<?php if (Yii::$app->session->hasFlash('success')): ?>
                <h3 class="alert alert-warning alert-dismissable">
                    <?php echo Yii::$app->session->getFlash('success') ?>
                 </h3>
                 <?php endif ?>
</div>
<div id="contents">
        <div class="clearfix">
            <div class="sidebar">
                <div>
                    <h2>联系信息</h2>
                    <ul class="contact">
                        <li>
                            <p>
                                <span class="home"></span> <em><?= $web_config->web_address ?></em>
                            </p>
                        </li>
                        <li>
                            <p class="phone">
                            电话: <?= $web_config->web_phone ?>
                            </p>
                        </li>
                        <!-- <li>
                            <p class="fax">
                                Fax: (+20) 000 222 988
                            </p>
                        </li> -->
                        <li>
                            <p class="mail">
                                邮箱: <?= $web_config->web_mail ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main">

                <h1>留言
                <h2>发送消息给我们</h2>
                <!-- <p>
                    You can remove any link to our website from this website template, you're free to use this website template without linking back to us.If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
                </p> -->
                <div class="message">


                 <?php $form = ActiveForm::begin(); ?>
                <!-- <form action="<?=Url::toRoute(['site/contact']); ?>" method="post" class="message"> -->
                    <label>姓名</label>
                    <input type="text" value="" name="Contacts[name]">
                    <label>电话</label>
                    <input type="text" value="" name="Contacts[phone]">
                    <label>地址</label>
                    <input type="text" value="" name="Contacts[address]">
                    <label>内容</label>
                    <textarea name="Contacts[content]"> </textarea>
                    <input type="submit" value="提交">
               <?php ActiveForm::end(); ?>
               </div>
            </div>
        </div>
    </div>
