<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'AI 辅助工具';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    body {
        background: url('/path-to-your-background-image.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #333;
        font-family: 'Arial', sans-serif; /* 使用现代字体 */
    }

    .aitools-index h1 {
        text-align: center;
        margin-top: 20px;
        font-size: 2.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        color: #fff; /* 白色字体 */
    }

    .tool-container {
        background: rgba(255, 255, 255, 0.8); /* 半透明背景 */
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        margin: 20px auto;
        padding: 20px;
        max-width: 800px; /* 最大宽度 */
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .tool-container:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.4);
    }

    .tool-image {
        height: 300px; /* 调整图片高度 */
        width: 100%; /* 确保图片宽度填满容器 */
        object-fit: cover;
        margin-bottom: 20px;
    }

    .tool-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .tool-subtitle {
        font-size: 1rem;
        color: #666;
    }

    .tool-text {
        font-size: 0.9rem;
        color: #888;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: background-color 0.3s;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<div class="aitools-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="container">
        <?php foreach ($dataProvider->getModels() as $tool): ?>
            <div class="tool-container">
                <img src="<?= Html::encode($tool->image_url) ?>" alt="<?= Html::encode($tool->Tool_Name) ?>" class="tool-image">
                <h2 class="tool-title"><?= Html::encode($tool->Tool_Name) ?></h2>
                <h3 class="tool-subtitle"><?= Html::encode($tool->Tool_Type) ?></h3>
                <p class="tool-text"><?= Html::encode($tool->Description) ?></p>
                <?= Html::a('访问官网', $tool->Official_Link, ['class' => 'btn btn-primary', 'target' => '_blank']) ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>