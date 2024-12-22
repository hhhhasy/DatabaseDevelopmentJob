<?php
/* 
 * Team:AI很费劲
 * Coding by 刘忠旺 2213605
 * 2024/12/10
 * AI 新闻中心首页视图
 *
 * 该文件展示了 AI 新闻中心的首页布局，包括了一个欢迎区域 (Hero Section)，以及一个新闻列表部分。 
 * 新闻列表部分使用 Yii 框架的 `ListView` 或 `foreach` 方式动态展示新闻内容。
 * 
 * 主要功能：
 * 1. 显示首页欢迎信息及图片 (Hero Section)。
 * 2. 展示新闻列表，包括新闻标题和链接。
 * 
 * 设计特点：
 * - 使用 Flexbox 和 Grid 布局来实现响应式设计，适配不同屏幕尺寸。
 * - 新闻项目以卡片式布局呈现，具有动态交互效果（如悬浮效果）。
 * 
 * 依赖：
 * 1. Yii2 框架，用于数据传输和 URL 路由。
 * 2. Google 字体 'Noto Sans SC' 用于页面文字样式。
 *
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\abnewssearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="abnews-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'publish_time') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'tags') ?>

    <?php // echo $form->field($model, 'image_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
