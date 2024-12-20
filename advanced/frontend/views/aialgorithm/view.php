<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aialgorithm */

\yii\web\YiiAsset::register($this);
?>
<div class="aialgorithm-view">

    <!-- 应用标题 -->
    <h1 class="aialgorithm-title"><?= Html::encode($this->title) ?></h1>

    <!-- 示例图片 -->
    <?php if (!empty($model->example_image)): ?>
        <div class="aialgorithm-image-container">
            <img src="<?= $model->example_image ?>" alt="Algorithm Example" class="aialgorithm-image">
        </div>
    <?php endif; ?>

    <!-- 详细描述 -->
    <div class="aialgorithm-details">
        <p><strong>名称：</strong> <?= Html::encode($model->name) ?></p>
        <p><strong>描述：</strong> <?= Html::encode($model->description) ?></p>
    </div>

</div>

<!-- CSS 样式 -->
<style>
.aialgorithm-view {
    margin: 20px auto;
    max-width: 800px;
}

.aialgorithm-title {
    font-size: 36px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.aialgorithm-image-container {
    text-align: left;
    margin-bottom: 20px;
}

.aialgorithm-image {
    max-width: 100%;
    height: auto;
    display: block;
    border-radius: 8px;
}

.aialgorithm-details {
    font-size: 16px;
    color: #555;
    line-height: 1.6;
}

.aialgorithm-details p {
    margin: 10px 0;
}
</style>
