<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    
    <?php $this->head() ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS 内嵌样式 -->
    <style>
        /* 页面背景 */
        body {
            
           
            background: linear-gradient(to bottom right, #0D3876, #1576C7, #4DA8DA); /* 深蓝到浅蓝的渐变 */
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* 导航栏 */
        .navbar-inverse {
            background: rgba(44, 62, 80, 0.5); /* 半透明背景 */
            height: 60px;
            padding: 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: background 0.3s ease; /* 平滑过渡效果 */
        }

        .navbar-inverse .navbar-brand {
            margin-right: auto;
            color: #fff;
            font-weight: bold;
            font-size: 1.6em;
        }

        .navbar-inverse .navbar-nav > li > a {
            color: #fff; /* 白色文字，适配透明背景 */
            padding: 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar-inverse .navbar-nav > li > a:hover {
            background-color: rgba(0, 123, 255, 0.8); /* 半透明悬停效果 */
            color: #fff;
            border-radius: 5px;
        }

        /* 页面内容 */
        .content-wrapper {
            padding: 20px;
            margin-top: 80px; /* Adjusted for better positioning */
        }

        h1, h2, h3, h4 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* 提示框 */
        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* 面包屑导航 */
        .breadcrumb {
            background-color: #f4f7f6;
            padding: 12px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* 页脚 */
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            margin-top: 50px;
        }

        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer .container p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '首页', 'url' => ['/site/index']],
        // ['label' => 'About', 'url' => ['/site/about']],
        // ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => '应用', 'url' => ['/app/index']],
        [
            'label' => '资源',
            'items' => [
                ['label' => '工具', 'url' => ['/aitools/index']],
                ['label' => '视频', 'url' => ['/aivideos/index']],
            ],
        ],
        ['label' => '新闻', 'url' => ['/abnews/index']],
        ['label' => '技术', 'url' => ['/aitechnology/index']]
    ];
    
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];

        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
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

    <div class="content-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
