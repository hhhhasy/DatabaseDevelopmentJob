<?php

/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 *                   阿斯雅 2210737
 *                   罗瑞     2210529
 *                   2024/12/19
 * @var $this yii\web\View        当前视图对象，提供视图相关的功能和信息
 * @var $form yii\bootstrap\ActiveForm  表单对象，管理表单的创建、校验和提交
 * @var $model \common\models\LoginForm  登录表单模型，包含用户名、密码等字段
 * 
 * 页面登录视图：包含了一个响应式的登录表单，背景图片、输入框、按钮等UI组件样式已经设置。
 * 用户可以通过这个页面登录系统，也可以请求重置密码或重新发送验证邮件。
 * 
 * 视图内容：
 * - 使用了Bootstrap的ActiveForm来生成表单。
 * - 表单字段包括用户名、密码和记住我复选框。
 * - 登录按钮以及密码重置、重新发送验证邮件的链接。
 * - 页面背景为图片，表单容器为半透明白色背景，确保表单内容清晰可见。
 */

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
            background-image: url('你的图片链接'); /* 替换为背景图片URL */
            background-size: cover;  /* 背景图片覆盖整个页面 */
            background-position: center; /* 背景居中显示 */
            background-repeat: no-repeat; /* 防止背景图片重复 */
            min-height: 100vh;
            display: flex;
            justify-content: center;  /* 横向居中 */
            align-items: center;      /* 纵向居中 */
            padding: 30px 0;
        }

        /* 表单容器样式 */
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);  /* 半透明背景，增加对比度 */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;  /* 最大宽度限制 */
        }

        /* 页面标题样式 */
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

        /* 登录按钮样式 */
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

        /* 居中文本样式 */
        .text-center {
            text-align: center;
        }

        /* 响应式设计，适应手机屏幕 */
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

<!-- 页面主体 -->
<div class="site-login">
    <!-- 登录表单容器 -->
    <div class="login-container">
        <!-- 页面标题 -->
        <h1><?= Html::encode($this->title) ?></h1>
        <p class="text-center text-muted">Please fill out the following fields to login:</p>

        <!-- 表单开始 -->
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <!-- 用户名输入框 -->
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-lg']) ?>

            <!-- 密码输入框 -->
            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-lg']) ?>

            <!-- 记住我复选框 -->
            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <!-- 密码重置和验证邮件链接 -->
            <div style="color:#999;margin:1em 0">
                If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                <br>
                Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
            </div>

            <!-- 登录按钮 -->
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-lg', 'name' => 'login-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

</body>
</html>
