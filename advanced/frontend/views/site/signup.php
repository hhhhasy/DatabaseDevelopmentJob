<?php

/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 *                   
 *                   2024/12/19
 * 这是一个用户注册页面的视图文件，使用Yii2框架开发。
 * 页面包含一个注册表单，允许用户输入用户名、邮箱和密码，并提交注册信息。
 * 页面背景使用了一张图片，并且使用了一些CSS样式来优化表单的外观。
 *
 * 主要功能：
 * - 显示注册表单，用户可以输入其基本信息（用户名、邮箱、密码）。
 * - 提交注册表单信息至后台进行处理。
 *
 * 视图文件通过Yii2的ActiveForm和Html助手类生成HTML表单，并为每个表单字段指定了适当的输入类型和样式。
 * 表单提交按钮使用Bootstrap样式，使其外观更加美观和一致。
 * 页面背景使用了CSS来设置背景图片，并且确保表单在页面中居中显示，提供良好的用户体验。
 *
 * @var $this yii\web\View             当前视图对象
 * @var $form yii\bootstrap\ActiveForm 当前表单对象
 * @var $model \frontend\models\SignupForm 注册表单模型对象
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
        .site-signup {
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
        .signup-container {
            background-color: rgba(255, 255, 255, 0.8);  /* 半透明背景，使得表单在背景图片上更可见 */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* 标题样式 */
        h2 {
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
            .signup-container {
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

<div class="site-signup">
    <div class="signup-container">
        <h2><?= Html::encode($this->title) ?></h2>
        <p class="text-center text-muted">Please fill out the following fields to signup:</p>

        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control form-control-lg']) ?>

            <?= $form->field($model, 'email')->textInput(['class' => 'form-control form-control-lg']) ?>

            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-control-lg']) ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-lg', 'name' => 'signup-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

</body>
</html>
