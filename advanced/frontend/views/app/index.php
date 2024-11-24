<?php

use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = 'Applications';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="application-index" style="font-family: 'Arial', sans-serif; background: #f9f9fc; padding: 40px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <h1 style="font-size: 36px; text-align: center; color: #333; margin-bottom: 40px;"><?= Html::encode($this->title) ?></h1>

    <!-- 竖向排列的图片和文字部分 -->
    <div class="application-vertical-list">
        <?php foreach ($dataProvider->getModels() as $model): ?>
            <div class="application-item" style="position: relative; margin-bottom: 40px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
                <div class="image-wrapper" style="position: relative; width: 100%; height: 400px; overflow: hidden;">
                    <!-- 图片部分 -->
                    <?= Html::img($model->image_url ?? 'default-image.jpg', [
                        'alt' => $model->name,
                        'style' => 'width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease-in-out;',
                        'class' => 'image-effect'
                    ]) ?>
                    <!-- 文字嵌入图片 -->
                    <div class="overlay" style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(0, 0, 0, 0.6); color: white; padding: 15px; border-radius: 10px;">
                        <h2 style="font-size: 24px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);"><?= Html::encode($model->name) ?></h2>
                        <p style="font-size: 14px; line-height: 1.6;"><?= Html::encode(mb_substr($model->description, 0, 100)) . '...' ?></p>
                    </div>
                </div>
                <div style="padding: 20px;">
                    <p style="font-size: 13px; color: #999; font-style: italic; margin-bottom: 10px;">Category: <?= Html::encode($model->category) ?></p>
                    <p style="font-size: 13px; color: #999; font-style: italic; margin-bottom: 10px;">Industry: <?= Html::encode($model->industry) ?></p>
                    <?= Html::a('Read More', ['view', 'id' => $model->application_id], [
                        'class' => 'btn btn-primary',
                        'style' => 'display: inline-block; padding: 10px 20px; font-size: 14px; text-transform: uppercase; background: #007bff; color: #fff; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.2s;',
                        'onmouseover' => 'this.style.backgroundColor="#0056b3";',
                        'onmouseout' => 'this.style.backgroundColor="#007bff";'
                    ]) ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- CSS 部分 -->
<style>
    /* 图片交互效果，鼠标悬停时放大图片 */
    .image-wrapper .image-effect {
        transition: transform 0.3s ease-in-out;
    }

    .image-wrapper:hover .image-effect {
        transform: scale(1.1);
    }

    /* 文字背景透明度和阴影 */
    .overlay h2 {
        font-size: 28px;
        font-weight: bold;
        text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8);
    }

    .overlay p {
        font-size: 16px;
        line-height: 1.8;
        color: #fff;
    }

    /* 鼠标悬停时应用项放大 */
    .application-item {
        position: relative;
        transition: transform 0.3s ease-in-out;
    }

    .application-item:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }
</style>
