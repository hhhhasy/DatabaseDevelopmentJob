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

    <!-- 引入 Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- 内嵌 CSS 美化样式 -->
    <style>
        /* 页面背景 */
        body {
            background-image: url('https://img.freepik.com/free-photo/3d-render-abstract-background-with-cyber-particles-design_1048-13836.jpg?t=st=1731904867~exp=1731908467~hmac=61bbc4e4d9500598c59ca39a3f6c97a60a64b23444845512e5887ba044140b76&w=900');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* 顶部导航栏 */
        .navbar-inverse {
            background: #2c3e50;
            height: 60px;
            padding: 0;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-inverse .navbar-brand {
            margin-right: auto;
            color: #fff;
            font-weight: bold;
            font-size: 1.6em;
        }

        .navbar-inverse .navbar-nav {
            display: flex;
        }

        .navbar-inverse .navbar-nav > li {
            margin-left: 15px;
        }

        .navbar-inverse .navbar-nav > li > a {
            color: #ddd;
            padding: 10px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar-inverse .navbar-nav > li > a:hover {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }

        /* 内容区域 */
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
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        ['label' => 'Applications', 'url' => ['/app/index']],
        ['label' => 'News', 'url' => ['/ainews/index']],
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

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
