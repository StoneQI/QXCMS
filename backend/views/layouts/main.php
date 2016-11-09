<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

$this->registerJs("
$('form').on('afterValidate', function (e) {
    if (cheched = $('#w0').data('yiiActiveForm').validated == false) {
        $(':submit').removeAttr('disabled').removeClass('disabled');
    }
});
$('form').on('beforeSubmit', function (e) {
    $(':submit').attr('disabled', true).addClass('disabled');
})",\yii\web\View::POS_LOAD);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '潍坊千行信息科技',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'id'=>'w1',
            'tag'=>'div',
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    if (!Yii::$app->user->isGuest) {
    $menuItems = [
        ['label' => '首页管理', 'url' => ['/indexinfo/update']],
        ['label' => '栏目管理', 'url' => ['/column/index']],
        ['label' => '文章管理', 'url' => ['/post/index']],
        ['label' => '留言管理', 'url' => ['/contact/index']],
        ['label' => '劳务信息', 'url' => ['/labor/index']],
        ['label' => '文件管理', 'url' => ['/file/index']],
        ['label' => '网站配置', 'url' => ['/webinfo/update']],
        ['label' => '修改密码', 'url' => ['/site/reset-password']],
    ];
    }
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '退出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<div class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right">潍坊千行信息科技有限公司技术支持</p>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
