<?php

use yii\helpers\Html;
use yii\widgets\ListView;



?>
<div class="application-index" style="font-family: 'Noto Sans SC', 'PingFang SC', sans-serif; background: #f9f9fc; padding: 40px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <!-- 大头标题 -->
    <div class="page-header" style="text-align: center; margin-bottom: 40px;">
        <h1 style="font-size: 42px; font-weight: bold; color: #333;">欢迎来到 AI 应用介绍中心</h1>
        <p style="font-size: 18px; color: #555; margin-top: 10px;">获取最新的人工智能行业应用趋势。</p>
    </div>

    <!-- 网格布局的图片和文字部分 -->
    <div class="news-grid">
        <?php foreach ($dataProvider->getModels() as $model): ?>
            <div class="news-item" style="display: flex; align-items: center; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); overflow: hidden; transition: transform 0.2s, box-shadow 0.2s;">
                <!-- 图片部分 -->
                <div class="news-image" style="flex: 1; height: 200px; overflow: hidden;">
                    <?= Html::img($model->image_url ?? 'default-image.jpg', [
                        'alt' => $model->name,
                        'style' => 'width: 100%; height: 100%; object-fit: cover;'
                    ]) ?>
                </div>
                <!-- 内容部分 -->
                <div class="news-content" style="flex: 1; padding: 20px;">
                    <h2 style="font-size: 20px; color: #333; margin-bottom: 10px;"><?= Html::encode($model->name) ?></h2>
                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin-bottom: 15px;"><?= Html::encode(mb_substr($model->description, 0, 100)) . '...' ?></p>
                    <p style="font-size: 13px; color: #999; font-style: italic; margin-bottom: 10px;">Category: <?= Html::encode($model->category) ?></p>
                    <p style="font-size: 13px; color: #999; font-style: italic; margin-bottom: 10px;">Industry: <?= Html::encode($model->industry) ?></p>
                    <?= Html::a('Read More', ['view', 'id' => $model->application_id], [
                        'class' => 'btn',
                        'style' => 'display: inline-block; padding: 10px 20px; font-size: 14px; text-transform: uppercase; background: #007bff; color: #fff; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.2s;',
                        'onmouseover' => 'this.style.backgroundColor="#0056b3";',
                        'onmouseout' => 'this.style.backgroundColor="#007bff";'
                    ]) ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- CSS 样式部分 -->
<style>
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(600px, 1fr));
        gap: 20px;
    }

    .news-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }
</style>
