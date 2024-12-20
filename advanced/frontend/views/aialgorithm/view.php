<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Aialgorithm */


\yii\web\YiiAsset::register($this);
?>
<div class="aialgorithm-view">

    <!-- 应用标题 -->
    <h1 class="aialgorithm-title"><?= Html::encode($this->title) ?></h1>

    <!-- 元信息 -->
    <p class="metadata">
        Algorithm ID: <span class="aialgorithm-id"><?= Html::encode($model->id) ?></span> |
        Description: <span class="aialgorithm-description"><?= Html::encode($model->description) ?></span>
    </p>

    <!-- 示例图片 -->
    <?php if (!empty($model->example_image)): ?>
        <div class="aialgorithm-image-container">
            <img src="<?= $model->example_image ?>" alt="Algorithm Example" class="aialgorithm-image">
        </div>
    <?php endif; ?>

    <!-- 操作按钮 -->
    <p class="action-buttons">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <!-- 详情视图 -->
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'description',
                'format' => 'ntext',
            ],
            'example_image',
        ],
    ]) ?>
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

.metadata {
    font-size: 14px;
    color: #555;
    margin-bottom: 20px;
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
