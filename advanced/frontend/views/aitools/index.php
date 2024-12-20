<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<div class="aitools-index" id="aitools-scroll-container">
    <!-- Hero Section -->
    <div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">AI工具平台</h1>
        <p class="hero-description">探索并使用最新的AI工具，这些工具涵盖机器学习、自然语言处理和深度学习领域。</p>
        <button class="hero-button">了解更多</button>
    </div>
    <div class="hero-image">
        <img src="http://127.0.0.1/yii-advanced-app-2.0.32/advanced/frontend/assets/img/Aitools/home.jpg" alt="工具图标">
    </div>
    </div>

    <!-- Tools Section -->
    <div class="tools-section" id="tools">
        <h2 class="section-title">Our AI Tools</h2>
        <div class="tool-card-container">
            <?php foreach ($dataProvider->getModels() as $model): ?>
                <div class="tool-card">
                    <img src="<?= $model->image_url ?>" alt="<?= Html::encode($model->Tool_Name) ?>" class="tool-image">
                    <div class="tool-content">
                        <h3 class="tool-name"><?= Html::encode($model->Tool_Name) ?></h3>
                        <p class="tool-type"><strong>Type:</strong> <?= Html::encode($model->Tool_Type) ?></p>
                        <p class="tool-description"><?= Html::encode($model->Description) ?></p>
                        <a href="<?= $model->Official_Link ?>" class="tool-link" target="_blank">Learn More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<style>
    /* 全局样式 */
    body {
        font-family: 'Roboto', Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f9fc;
        color: #333;
    }

    /* Hero Section */
    .hero-section {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #f8f9fa; /* 可替换为更适合的颜色 */
        padding: 50px 10%;
        height: 400px; /* 调整高度 */
    }

    /* 左侧文字内容 */
    .hero-content {
        max-width: 100%;
    }

    .hero-title {
        font-size: 3rem;
        font-weight: bold;
        color: #2C384A; /* 深色标题 */
        margin-bottom: 20px;
    }

    .hero-description {
        font-size: 1.2rem;
        color: #6c757d; /* 浅灰色说明 */
        margin-bottom: 20px;
    }

    .hero-button {
        background-color: #ff6f00; /* 橙色按钮 */
        color: white;
        font-size: 1rem;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .hero-button:hover {
        background-color: #e65c00; /* 深橙色 */
    }

    /* 右侧图片 */
    .hero-image img {
        max-width: 400px; /* 图片最大宽度 */
        height: auto;
    }
    /* Tools Section */
    .tools-section {
        padding: 50px 20px;
        text-align: center;
    }

    .section-title {
        font-size: 2rem;
        margin-bottom: 30px;
    }

    .tool-card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .tool-card {
        background: white;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        width: 300px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .tool-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    .tool-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .tool-content {
        padding: 15px;
        text-align: left;
    }

    .tool-name {
        font-size: 1.25rem;
        margin: 0 0 10px;
    }

    .tool-type, .tool-description {
        font-size: 0.9rem;
        margin: 5px 0;
    }

    .tool-link {
        display: inline-block;
        margin-top: 10px;
        color: #0057e7;
        text-decoration: none;
        font-weight: bold;
    }

    .tool-link:hover {
        text-decoration: underline;
    }
</style>
