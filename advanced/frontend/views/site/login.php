<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <style>
        /* 页面背景和整体布局 */
        .site-login {
            background-image: url('你的图片链接'); /* 在这里替换为你的背景图片URL */
            background-size: cover;  /* 背景图片覆盖整个页面 */
            background-position: center; /* 背景居中显示 */
            background-repeat: no-repeat; /* 防止背景图片重复 */
            min-height: 100vh;
            display: flex;
            justify-content: center;  /* 横向居中 */
            align-items: center;      /* 纵向居中 */
            padding: 30px 0;
        }

        /* 表单容器 */
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);  /* 半透明背景，使得表单在背景图片上更可见 */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* 标题样式 */
        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* 输入框样式 */
        input.form-control {
            border-radius: 30px;
            box-shadow: none;
            border: 1px solid #ddd;
            height: 50px;
            font-size: 1rem;
            padding: 0 15px;
            margin-bottom: 15px;
        }

        input.form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* 按钮样式 */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 30px;
            height: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* 居中显示的文本 */
        .text-center {
            text-align: center;
        }

        /* 调整输入框和按钮的大小，使其更适合手机屏幕 */
        @media (max-width: 576px) {
            .login-container {
                width: 100%;
                padding: 20px;
            }

            .btn-primary {
                font-size: 1rem;
            }

            .form-control {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<div class="site-login">
    <div class="login-container">
        <h1><?= Html::encode($this->title) ?></h1>
        <p class="text-center text-muted">Please fill out the following fields to login:</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-lg']) ?>

            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-lg']) ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                <br>
                Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

</body>
</html>
