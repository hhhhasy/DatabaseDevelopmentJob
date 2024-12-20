<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\app */


\yii\web\YiiAsset::register($this);
?>
<div class="app-view">

    <!-- 应用标题 -->
    <h1 class="app-title"><?= Html::encode($this->title) ?></h1>

    <!-- 元信息 -->
    <p class="metadata">
        Application ID: <span class="app-id"><?= Html::encode($model->application_id) ?></span> |
        Category: <span class="app-category"><?= Html::encode($model->category) ?></span> |
        Industry: <span class="app-industry"><?= Html::encode($model->industry) ?></span>
    </p>

    <!-- 应用图片 -->
    <?php if (!empty($model->image_url)): ?>
        <div class="app-image-container">
            <img src="<?= $model->image_url ?>" alt="App Image" class="app-image">
        </div>
    <?php endif; ?>

    <!-- 应用描述 -->
    <div class="app-description">
        <?= nl2br(Html::encode($model->description)) ?>
    </div>

    <!-- 使用场景 -->
    <?php if (!empty($model->use_cases)): ?>
        <div class="app-use-cases">
            <h2>Use Cases</h2>
            <p><?= nl2br(Html::encode($model->use_cases)) ?></p>
        </div>
    <?php endif; ?>


</div>

<!-- CSS 样式 -->
<style>
.app-view {
    margin: 20px auto;
    max-width: 800px;
}

.app-title {
    font-size: 36px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.metadata {
    font-size: 14px;
    color: #555;
    margin-bottom: 20px;
}

.app-image-container {
    text-align: left;
    margin-bottom: 20px;
}

.app-image {
    max-width: 100%;
    height: auto;
    display: block;
}

.app-description {
    font-size: 16px;
    line-height: 1.8;
    color: #444;
    margin-bottom: 20px;
}

.app-use-cases h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.app-use-cases p {
    font-size: 16px;
    color: #444;
    line-height: 1.8;
}

.action-buttons {
    margin-top: 20px;
    text-align: left;
}

.action-buttons .btn {
    padding: 10px 20px;
    font-size: 14px;
    text-transform: uppercase;
    margin-right: 10px;
    border-radius: 5px;
}
</style>
