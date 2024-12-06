<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ainews */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ainews-view">

    <!-- 新闻标题 -->
    <h1 class="news-title"><?= Html::encode($this->title) ?></h1>

    <!-- 发布信息 -->
    <p class="metadata">
        By <span class="author"><?= Html::encode($model->author) ?></span> |
        Published on <span class="published-date"><?= date('F j, Y', strtotime($model->published_at)) ?></span>
    </p>

    <!-- 新闻图片 -->
    <?php if (!empty($model->image_url)): ?>
        <div class="news-image-container">
            <img src="<?= $model->image_url ?>" alt="News Image" class="news-image">
        </div>
    <?php endif; ?>

    <!-- 新闻内容 -->
    <div class="news-content">
        <?= nl2br(Html::encode($model->content)) ?>
    </div>

    <!-- 标签 -->
    <?php if (!empty($model->tags)): ?>
        <p class="news-tags">
            <strong>Tags:</strong>
            <?php foreach (explode(',', $model->tags) as $tag): ?>
                <span class="tag"><?= Html::encode(trim($tag)) ?></span>
            <?php endforeach; ?>
        </p>
    <?php endif; ?>
</div>

<!-- CSS 样式 -->
<style>
.ainews-view {
    margin: 20px auto;
    max-width: 800px;
}

.news-title {
    font-size: 36px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.metadata {
    font-size: 14px;
    color: #555;
    margin-bottom: 20px;
    text-align: left;
}

.news-image-container {
    text-align: left;
    margin-bottom: 20px;
}

.news-image {
    max-width: 100%;
    height: auto;
    display: block;
}

.news-content {
    font-size: 16px;
    line-height: 1.8;
    color: #444;
    margin-bottom: 20px;
}

.news-tags {
    font-size: 14px;
}

.news-tags .tag {
    display: inline-block;
    background-color: #e9ecef;
    color: #555;
    padding: 3px 8px;
    margin-right: 5px;
    border-radius: 3px;
    font-size: 12px;
}
</style>