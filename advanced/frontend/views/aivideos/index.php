<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'AI Video Library';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss("
    .aivideos-index h1 {
        font-family: 'Arial', sans-serif;
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }
    .aivideos-index {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .video-container {
        margin: 20px auto;
        max-width: 800px;
        text-align: center;
    }
    .video-container h2 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: #007bff;
    }
    .video-frame {
        width: 100%;
        height: 450px;
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
");
?>
<div class="aivideos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php foreach ($dataProvider->models as $model): ?>
        <div class="video-container">
            <h2><?= Html::encode($model->Title) ?></h2>
            <?php
            $link = $model->Video_Link;

            // 检查是否是哔哩哔哩视频
            if (strpos($link, 'bilibili.com') !== false) {
                // 提取 BV ID
                preg_match('/BV[0-9A-Za-z]+/', $link, $matches);
                $bvid = $matches[0] ?? null;
            
                if ($bvid) {
                    echo '<iframe class="video-frame" src="https://player.bilibili.com/player.html?bvid=' . $bvid . '&autoplay=0" allowfullscreen="true"></iframe>';
                }
            } elseif (strpos($link, 'youtube.com') !== false || strpos($link, 'youtu.be') !== false) {
                // YouTube 播放器
                $youtubeEmbed = str_replace("watch?v=", "embed/", $link);
                echo '<iframe class="video-frame" src="' . $youtubeEmbed . '?autoplay=0" allowfullscreen></iframe>';
            }
            
            elseif (preg_match('/\.(mp4|webm|ogg)$/i', $link)) {
                // 本地视频播放器
                echo '<video class="video-frame" controls>
                          <source src="' . $link . '" type="video/mp4">
                          Your browser does not support the video tag.
                      </video>';
            } else {
                // 未知视频链接
                echo Html::a('Watch Video', $link, ['target' => '_blank', 'class' => 'btn btn-primary']);
            }
            ?>
        </div>
    <?php endforeach; ?>

</div>
