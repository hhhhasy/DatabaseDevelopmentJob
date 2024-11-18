<?php
use yii\helpers\Html;
use yii\widgets\ListView;
?>

<div class="ainews-index" style="font-family: 'Arial', sans-serif; background: #f9f9fc; padding: 40px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <h1 style="font-size: 36px; text-align: center; color: #333; margin-bottom: 40px;"><?= Html::encode($this->title) ?></h1>
    
    <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <?php foreach ($dataProvider->getModels() as $model): ?>
            <div class="news-item" style="background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); transition: transform 0.2s, box-shadow 0.2s;">
                <div style="position: relative;">
                    <?= Html::img($model->image_url, [
                        'alt' => $model->title,
                        'style' => 'width: 100%; height: 180px; object-fit: cover; display: block;',
                    ]) ?>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.8); color: #fff; padding: 15px; text-align: center; font-size: 16px; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
                        <?= Html::encode($model->title) ?>
                    </div>
                </div>
                <div style="padding: 15px;">
                    <p style="font-size: 14px; color: #555; line-height: 1.6; text-align: justify; margin-bottom: 15px;">
                        <?= Html::encode(mb_substr($model->content, 0, 100)) . '...' ?>
                    </p>
                    <?= Html::a('Read More', ['view', 'id' => $model->id], [
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
